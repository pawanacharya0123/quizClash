@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center"> <strong>Welcome to the game!</strong> </p>
                    <a class="btn btn-success btn-block" href="{{ route('play') }}" >Play</a>
                    {{-- <stopwatch-component></stopwatch-component> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
