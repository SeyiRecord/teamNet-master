@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2>Edit Profile Dashboard</div>

                <div class="panel-body">
                    {!! Form::model($orgprofile, ['method' => 'PUT', 'action' => ['orgprofileController@update', $user->userName]]) !!}
                    {{ csrf_field() }}

                    <div class="row">                    
                        <div class="col-md-6 ">
                            {!! Form::label('name', 'Organization Name', ['class' => 'control-label']) !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('motto', 'Motto', ['class' => 'control-label']) !!}
                            {!! Form::text('motto', old('motto'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('motto'))
                                <p class="help-block">
                                    {{ $errors->first('motto') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('vision', 'vision', ['class' => 'control-label']) !!}
                            {!! Form::textarea('vision', old('vision'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('vision'))
                                <p class="help-block">
                                    {{ $errors->first('vision') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('details', 'Details', ['class' => 'control-label']) !!}
                            {!! Form::textarea('details', old('details'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('details'))
                                <p class="help-block">
                                    {{ $errors->first('details') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('industry', 'ip Code', ['class' => 'control-label']) !!}
                            {!! Form::text('industry', old('industry'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('industry'))
                                <p class="help-block">
                                    {{ $errors->first('industry') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('location', 'Location', ['class' => 'control-label']) !!}
                            {!! Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('location'))
                                <p class="help-block">
                                    {{ $errors->first('location') }}
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
                            {!! Form::label('zipCode', 'Zip Code', ['class' => 'control-label']) !!}
                            {!! Form::text('zipCode', old('zipCode'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('zipCode'))
                                <p class="help-block">
                                    {{ $errors->first('zipCode') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('webAddress', 'webAddress', ['class' => 'control-label']) !!}
                            {!! Form::text('webAddress', old('webAddress'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('webAddress'))
                                <p class="help-block">
                                    {{ $errors->first('webAddress') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-md-6">
                            {!! Form::label('logo', 'Logo', ['class' => 'control-label']) !!}
                            {!! Form::file('logo', old('logo'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('logo'))
                                <p class="help-block">
                                    {{ $errors->first('logo') }}
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
