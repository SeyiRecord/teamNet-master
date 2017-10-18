@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2>Edit Profile Dashboard</div>

                <div class="panel-body">
                    @if(Auth::user()->userName)
                    
                    {!! Form::model($userprofile, ['method' => 'PUT', 'action' => ['UserprofileController@update', $user->userName]]) !!}
                    {{ csrf_field() }}

                    <div class="row">                    
                        <div class="col-md-6 ">
                            {!! Form::label('fName', 'First Name', ['class' => 'control-label']) !!}
                            {!! Form::text('fName', old('fName'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('fName'))
                                <p class="help-block">
                                    {{ $errors->first('fName') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('lName', 'Last Name', ['class' => 'control-label']) !!}
                            {!! Form::text('lName', old('lName'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('lName'))
                                <p class="help-block">
                                    {{ $errors->first('lName') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('profileSummary', 'Profile Summary', ['class' => 'control-label']) !!}
                            {!! Form::textarea('profileSummary', old('profileSummary'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('profileSummary'))
                                <p class="help-block">
                                    {{ $errors->first('profileSummary') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('city', 'City', ['class' => 'control-label']) !!}
                            {!! Form::text('city', old('city'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('city'))
                                <p class="help-block">
                                    {{ $errors->first('city') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('state', 'State', ['class' => 'control-label']) !!}
                            {!! Form::text('state', old('state'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('state'))
                                <p class="help-block">
                                    {{ $errors->first('state') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('country', 'Country', ['class' => 'control-label']) !!}
                            {!! Form::text('country', old('country'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('country'))
                                <p class="help-block">
                                    {{ $errors->first('country') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('profileImg', 'Profile Image', ['class' => 'control-label']) !!}
                            {!! Form::file('profileImg', old('profileImg'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('profileImg'))
                                <p class="help-block">
                                    {{ $errors->first('profileImg') }}
                                </p>
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
                    {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
