@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left">{{$rank}}</h4>
                    <h4 class="panel-title pull-right">Categories</h4>
                </div>

                <div id="app2" class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
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