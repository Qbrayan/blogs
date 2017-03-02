@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome {{ Auth::user()->name }} <span class=""><a href="{{ url('/register') }}">   &nbsp; &nbsp;Go back</a></span></div>

                    <div class="panel-body">
                        Add blog:
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('add_blog') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Blog Name">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input id="author" type="text" class="form-control" name="author" required placeholder="Enter the author of the blog">

                                    @if ($errors->has('author'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <input id="category" type="text" class="form-control" name="category" required placeholder="Enter the blog category">
                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add blog
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection