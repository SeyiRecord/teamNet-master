@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"><H2>Invitation to Participate in Research</H2>
                    <div class="panel-body">
                        {{ csrf_field() }}
                        {!! Form::model($participation,['method' => 'PUT', 'route' => ['participations.update', $participation->id], 'files' => true]) !!}

                            <div class="row">
                                <div class="col-md-8 form-group">
                                    {!! Form::label('researchID', 'ResearchID', ['class' => 'col-sm-4 control-label']) !!}
                                    <div class="col-sm-6 ">
                                        {!! Form::text('researchID', old('researchID'), array('class' => 'form-control','id' => 'researchID','required' => 'required'))!!}
                                        <p class="help-block"></p>
                                        @if($errors->has('researchID'))
                                            <p class="help-block">
                                                {{ $errors->first('researchID') }}
                                            </p>
                                        @endif
                                    </div> 
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-8 form-group">
                                    {!! Form::label('userName', 'Requested By', ['class' => 'col-sm-4 control-label']) !!}
                                    <div class="col-sm-6 ">
                                        {!! Form::text('userName', old('userName'), array('class' => 'form-control','id' => 'userName','required' => 'required','disabled'=>'disabled'))!!}
                                        <p class="help-block"></p>
                                        @if($errors->has('userName'))
                                            <p class="help-block">
                                                {{ $errors->first('userName') }}
                                            </p>
                                        @endif
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <h3>Participation status</h3>
                                        {{ Form::label('name', 'Approve') }}
                                        {{ Form::radio('status', 'Approved') }}<br>
                                        {{ Form::label('name', 'Decline') }}
                                        {{ Form::radio('status', 'Decline') }}<br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 panel-headinzzzzg">
                                    <label class="col-md-2 col-md-offset-2"></label>
                                    <div class="col-md-6 col-md-offset-4"><br>
                                        <button type="submit" class="btn btn-primary">
                                            Save
                                        </button>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </form>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
