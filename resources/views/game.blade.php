@extends('layouts.app')

@section('content')
<div class="container" id="app1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    {{$category->category}}
                    <a class="panel-title pull-right" href="{{ route('play') }}">Categories</a>
                </div>

                <div class="panel-body">
                    {{-- <input id="cat_id" name="id" type="hidden" value="{{$category->id}}">
                    <ul>
                    @foreach ($questions as $question)
                        <li>
                            <p id="question" class="text-center"><strong> {{$question->question}} </strong>{{$question->difficulty}}</p><br>
                            <input id="que" name="id" type="hidden" value="{{$question->id}}">
                            <a id="ans1" class="btn btn-success btn-block" href="#">{{$question->ans1}}</a> <br>
                            <a id="ans2" class="btn btn-success btn-block" href="#">{{$question->ans2}}</a> <br>
                            <a id="ans3" class="btn btn-success btn-block" href="#">{{$question->ans3}}</a> <br>
                        </li>
                    @endforeach
                    </ul> --}}
                    {{ csrf_field() }}

                <game-component 
                {{-- name_props="{{Auth::user()}}"  --}}
                {{-- score_props= "{{$cat_score}}" --}}
                {{-- life_props= "{{$cat_life}}" --}}
                id="{{$category->id}}"></game-component>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
{{-- <script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const cat_id= $('#cat_id').val();
        const que_id= $('#que').val();
        
        $('#ans1').click(function(e){
           const ans= $(this).text();
           
            $.get('/getRequest/'+ans+'/'+que_id+'/'+cat_id
            // , function(data){
            //     console.log(data);  
            // }
            );
        
        });
        $('#ans2').click(function(e){
            const ans= $(this).text();
            
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            $.get('/getRequest/'+ans+'/'+que_id+'/'+cat_id, function(data){
                console.log(data);  
            })
        
        });
        $('#ans3').click(function(e){
            const ans= $(this).text();
            
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            $.get('/getRequest/'+ans+'/'+que_id+'/'+cat_id , function(data){
                console.log(data);  
            });
        
        });
            
        
    });
   </script> --}}
@endsection