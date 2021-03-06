@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome {{ Auth::user()->name }}</div>

                    <div class="panel-body">
                        <div class="interns">
                            <a href="{{ url('/intern') }}">See interns</a><br/>
                        </div>
                        <div class="blogs">
                            <a href="{{ url('/blog') }}">See blogs</a><br/>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection