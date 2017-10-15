@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"><H2>Edit Research Dashboard</H2>
                    <div class="panel-body">
                        {{ csrf_field() }}
                        {!! Form::model($research,['method' => 'PUT', 'route' => ['researches.update', $research->id], 'files' => true,'novalidate' => 'novalidate']) !!}

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('topic', 'topic', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('topic', old('topic'), array('class' => 'form-control','id' => 'topic','required' => 'required'))!!}
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
                                    {!! Form::textarea('summary', old('summary'), array('class' => 'form-control','id' => 'summary','required' => 'required'))!!}
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
                                {!! Form::label('startDate', 'startDate', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('startDate', old('startDate'), array('class'=>'datepicker form-control', 'id' => 'startDate', 'placeholder'=>'MM/DD/YYYY','required' => 'required'))!!}
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
                                {!! Form::label('endDate', 'endDate', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('endDate', old('endDate'), array('class'=>'datepicker form-control', 'id' => 'endDate', 'placeholder'=>'MM/DD/YYYY','required' => 'required'))!!}
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
                                {!! Form::label('organization', 'organization', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('organization', old('organization'), array('class' => 'form-control','id' => 'organization','required' => 'required'))!!}
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
                                {!! Form::label('location', 'location', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('location', old('location'), array('class' => 'form-control','id' => 'location','required' => 'required'))!!}
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
                                {!! Form::label('city', 'city', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('city', old('city'), array('class' => 'form-control','id' => 'city','required' => 'required'))!!}
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
                                {!! Form::label('state', 'state', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('state', old('state'), array('class' => 'form-control','id' => 'state','required' => 'required'))!!}
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
                                {!! Form::label('country', 'country', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('country', old('country'), array('class' => 'form-control','id' => 'country','required' => 'required'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('country'))
                                        <p class="help-block">
                                            {{ $errors->first('country') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 panel-headinzzzzg"><br>
                                <label class="col-sm-5 col-md-offset-7"></label>
                                <div class="btn-bottom ">
                                    {!! Form::submit('Save as Draft',['class' => 'btn btn-primary','id'=>'draftButton', 'name' => 'partialSave']) !!}
                                    {!! Form::submit('Submit',['class' => 'btn btn-success','name'=> 'store', 'id'=>'submitButton']) !!}
                                    <a href="{{ URL::previous() }}" class="btn btn-danger" id="cancelButton">Cancel</a>
                                </div>
                                <br>
                            </div>
                        </div>

                    </form>
                    {!! Form::close() !!}

                        
                        <h4><a href = "/createresearch">Create New Research</a> </h4>
                        <h4><a href = "/researches">List Researches</a> <br></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
