<?php

namespace App\Console\Commands;

use DB;
use Auth;
use App\User;
use App\Categoryprofile;
use Illuminate\Console\Command;

class LifeUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'life:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update profileCategories of logged user to 2(max)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {    
        \Log::info('here1');
        $cat_profiles= DB::table('categoryprofiles')->where('user_id', Auth::id())->get();
        
        

        foreach ($cat_profiles as $cat_profile) {
   
            $cat_profile->rank+= 1;
                if($cat_profile->life> 2){
                    $cat_profile->life= 2;
                }
            $cat_profile->save();
            
        }
        // \Log::info('here4');
    }
}
