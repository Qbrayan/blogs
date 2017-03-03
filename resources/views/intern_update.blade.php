@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome {{ Auth::user()->name }} <span class=""><a href="{{ url('/intern') }}">  &nbsp; &nbsp;Go back</a></span></div>

                    <div class="panel-body">
                        Update intern:
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('update_intern') }}">
                            {{ csrf_field() }}
                            <input type="hidden" class="form-control" name="id" value="{{ $internup->id }}">
                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">

                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control" name="firstname"  value="{{ $internup->firstname }}" required autofocus placeholder="Enter the first Name">

                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="lastname"  value="{{ $internup->lastname }}" required placeholder="Enter the last name">

                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-6">
                                    <input id="department" type="text" class="form-control" name="department" required value="{{ $internup->department}}" placeholder="Enter the department">
                                    @if ($errors->has('department'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <input id="contact" type="text" class="form-control" name="contact" required value="{{ $internup->contact}}" placeholder="Enter contact details">
                                    @if ($errors->has('contact'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
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

