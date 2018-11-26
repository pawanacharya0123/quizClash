<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Session;
use App\User;
use App\Play;
use App\Profile;
use App\Category;
use App\Question;
use App\Categoryprofile;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');                       
    }

    public function play()
    {
        $categories= Category::all();
        return view('categories')->with('categories', $categories)
                                    ->with('rank', Auth::user()->profile->rank);                 
    }

    public function gameplay($id){
        //Oncascade delete usinf eloquent events
        // $user= Auth::user();
        // $user->delete();
        // dd('here');



        //start
        $categoryprofile= Categoryprofile::where('category_id', $id)
                            ->where('user_id', Auth::id())->first();

        // check if the rows are already there so dont have to create rows
        if(!Play::where('user_id', Auth::id())->where('category_id', $id)->first()){
            //dd('banko xainna');
            //create rows fot the cat-id questions with level-0 (inital)
            $questions= Question::where('difficulty', $categoryprofile->rank)->where('category_id', $id)
                                    ->inRandomOrder()->take(6)->get();
            if(!$questions->first()){
                // dd('here: empty question set');
                $session('over','No more questions ');
                // Session::flash('message1', 'My message');
                return redirect()->back();
            }

            playSaveToDB($questions, $categoryprofile);

        }
    
        //rows already exists
        //dd('already exists');
  
        if($categoryprofile->life== 0){
            Session::flash('lifeline','No lives:wait');
            return redirect()->back();
        }
        $cat_score= Categoryprofile::where('category_id', $id)
                            ->where('user_id', Auth::id())->first()->score;  

        return view('game')->with('category', Category::find($id));
                        //    ->with('cat_score', $cat_score)
                        //    ->with('cat_life', $categoryprofile->life);                        
    }

   

    public function vuebata($id){
        //old
        // $rank= Categoryprofile::where('category_id', $id)
        //                         ->where('user_id', Auth::id())->first()->rank;

        // return Category::find($id)->questions()
        //                         ->where('difficulty', $rank)
        //                         ->inRandomOrder()
        //                         ->take(1)->get();
        

        //new from Play Model and played attribute set to 1 for sent question   
        $play= returnPlay($id);                                        
        
        if(!$play->count()){
            $playable= Play::where('category_id', $id)
            ->where('user_id', Auth::id())->take(6)->get();
            foreach ($playable as $ready) {
                $ready->played= 0;
                $ready->save();
            }
        }

        $play= returnPlay($id);

        $question= Question::find($play->first()->question_id);
        $playing= Play::where('question_id', $question->id)
                    ->where('user_id', Auth::id())->first();
        $playing->played =1;
        $playing->save();
        return $question;
    }

    public function answercheck($que_id, $ans){
       
        $cat_id= Question::find($que_id)->category->id;
        $categoryprofile= Categoryprofile::where('category_id', $cat_id)
                                        ->where('user_id', Auth::id())->first();
                                        
        $pawan= (Question::find($que_id)->correct=== $ans) ? true: false;
        if($pawan){
            $categoryprofile->score+= 5;
            if($categoryprofile->score== 20){
                $categoryprofile->score= 0;
                $categoryprofile->rank+= 1;
                $categoryprofile->save();
                //update overall rank
                $profile= Auth::user()->profile;
                $profile->rank+= 1;
                $profile->save();
                //drop the previous rows of old-level, also
                $play_instance= Play::where('category_id', $cat_id)
                        ->where('user_id', Auth::id())->get();

                playDeleteFromDB($play_instance);
                
                //add new columns with difficulty=rank
                //create rows fot the cat-id questions with level-0 (inital)

                $questions= Question::where('difficulty', $categoryprofile->rank)
                                        ->where('category_id', $cat_id)
                                        ->inRandomOrder()->take(6)->get();

                if(!$questions->first()){
                    // dd('here: empty question set');
                    return 'over';
                }
                //delete all
                playSaveToDB($questions, $categoryprofile);

                return ("upgrade: level $categoryprofile->rank");
            }
            $categoryprofile->save();
            
            return 'right';
        }else{
            $categoryprofile->life= $categoryprofile->life-1;
            $categoryprofile->save();
            if($categoryprofile->life== 0){
                return 'dead';
            }
            $categoryprofile->save();
            return 'wrong';
        }
    }

    public function vuelife($cat_id){
        return Categoryprofile::where('category_id', $cat_id)
                                ->where('user_id', Auth::id())
                                ->first()->life;
    }

    public function vuescore($cat_id){
        return Categoryprofile::where('category_id', $cat_id)
                                ->where('user_id', Auth::id())
                                ->first()->score;
    }
    
    public function vuelevel($cat_id){
        return Play::where('category_id', $cat_id)
                                ->where('user_id', Auth::id())
                                ->first()->level;
    }
}



//private functions
function playSaveToDB($questions, $categoryprofile){
    foreach ($questions as $question) {
        $play= new Play();
        $play->user_id= Auth::id();
        $play->question_id= $question->id;
        $play->category_id=$question->category_id;
        $play->level= $categoryprofile->rank;
        $play->played=0;
        $play->save();     
        }
    return true;
}


function playDeleteFromDB($play_instance){
    foreach ($play_instance as $play_item) {
        $play_item->delete();
    }
    return true;
}

function returnPlay($id){
    return Play::where('category_id', $id)
                    ->where('user_id', Auth::id())
                    ->where('played', 0)
                    ->inRandomOrder()->take(1)->get();
}
