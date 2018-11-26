@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" role="alert">
            @if (session('over'))
            <div class="alert alert-success">
                {{ session('over') }}
            </div>
            @endif
            @if (session('lifeline'))
                <div class="alert alert-danger">
                    {{ session('lifeline') }}
                </div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left">Rank:- {{$rank}}</h4>
                    <h4 class="panel-title pull-right">Categories</h4>
                </div>

                <div id="app2" class="panel-body">                  
                    <ul>
                        <categories-component :items="{{$categories}}"></categories-component>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    
@endsection