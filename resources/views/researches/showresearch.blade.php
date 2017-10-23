@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"><H2></H2>Show Research Dashboard</div>
                    <div class="panel-body">
                        {{ csrf_field() }}
                        {!! Form::model($research,['method' => 'PUT', 'route' => ['researches.update', $research->id], 'files' => true,]) !!}

                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('topic', 'Topic', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('topic', old('topic'), array('class' => 'form-control','id' => 'topic','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('topic'))
                                        <p class="help-block">
                                            {{ $errors->first('topic') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('summary', 'Summary', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::textarea('summary', old('summary'), array('class' => 'form-control','id' => 'summary','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('summary'))
                                        <p class="help-block">
                                            {{ $errors->first('summary') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('startDate', 'Start Date', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('startDate', old('startDate'), array('class'=>'datepicker form-control', 'id' => 'startDate', 'placeholder'=>'MM/DD/YYYY','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('startDate'))
                                        <p class="help-block">
                                            {{ $errors->first('startDate') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('endDate', 'End Date', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('endDate', old('endDate'), array('class'=>'datepicker form-control', 'id' => 'endDate', 'placeholder'=>'MM/DD/YYYY','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('endDate'))
                                        <p class="help-block">
                                            {{ $errors->first('endDate') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('organization', 'Organization', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('organization', old('organization'), array('class' => 'form-control','id' => 'organization','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('organization'))
                                        <p class="help-block">
                                            {{ $errors->first('organization') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('location', 'Location', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('location', old('location'), array('class' => 'form-control','id' => 'location','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('location'))
                                        <p class="help-block">
                                            {{ $errors->first('location') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('city', 'City', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('city', old('city'), array('class' => 'form-control','id' => 'city','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('city'))
                                        <p class="help-block">
                                            {{ $errors->first('city') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('state', 'State', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('state', old('state'), array('class' => 'form-control','id' => 'state','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('state'))
                                        <p class="help-block">
                                            {{ $errors->first('state') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('country', 'Country', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('country', old('country'), array('class' => 'form-control','id' => 'country','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('country'))
                                        <p class="help-block">
                                            {{ $errors->first('country') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>
                        </div>

                    </form>
                    {!! Form::close() !!}
<<<<<<< HEAD
                    <h4><a href = "/participations/{{$research->id}}">Participate in Research</a> </h4>
=======
                    @if($research->ownerID != Auth::user()->userName)
                        <h4><a href = "/participations/{{$research->id}}">Participate in Research</a> </h4>
                    @endif
>>>>>>> d8d4e8ccf1ebff23f0eb22a06521d28ae42598ea
                    <h4><a href = "/createresearch">Create New Research</a> </h4>
                    <h4><a href = "/researches">List Researches</a> <br></h4
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
