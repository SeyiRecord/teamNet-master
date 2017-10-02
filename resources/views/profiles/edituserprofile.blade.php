@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- <H2>{{ Auth::user()->userName }}</H2> -->
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2>Edit Profile Dashboard</div>

                <div class="panel-body">
                    <form class="form-horizontal" method='POST' action='/profileform'>
                        <!-- <form class="form-horizontal" method="POST" action=""> -->
                        {{ csrf_field() }}

                                             
                        <div class="form-group{{ $errors->has('fName') ? ' has-error' : '' }}">
                            <label for="fName" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fName" type="text" class="form-control" name="fName" value="{{ old('fName') }}" required autofocus>

                                @if ($errors->has('fName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('lName') ? ' has-error' : '' }}">
                            <label for="lName" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lName" type="text" class="form-control" name="lName" value="{{ old('lName') }}" required autofocus>

                                @if ($errors->has('lName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('profileSummary') ? ' has-error' : '' }}">
                            <label for="profileSummary" class="col-md-4 control-label">Profile Summary</label>

                            <div class="col-md-6">
                                <textarea rows="4" cols="50" class="form-control" name="profileSummary" value="{{ old('profileSummary') }}" required autofocus> </textarea>

                                @if ($errors->has('profileSummary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profileSummary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                                                
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ old('state') }}" required autofocus>

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('profileImg') ? ' has-error' : '' }}">
                            
                            <label for="profileImg" class="col-md-4 control-label">Profile Image</label>
                            <div class="col-md-6">
                                <input id="profileImg" type="file" name="profileImg" value="{{ old('profileImg') }}" required autofocus>

                                @if ($errors->has('profileImg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profileImg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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
