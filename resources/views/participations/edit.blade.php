@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"><H2>Invitation to Participate in Research</H2>
                    <div class="panel-body">
                        {{ csrf_field() }}
                        {!! Form::model($participate,['method' => 'PUT', 'route' => ['participations.update', $participation->id], 'files' => true,'novalidate' => 'novalidate']) !!}

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
                                    <label>Participation status :</label><br/>
                                    <label><input checked="checked" name="userType" type="radio" value="pending">
                                        Pending
                                    </input></label></br>
                                    <label><input name="userType" type="radio" value="Approved">
                                        Approved
                                    </input></label></br>
                                    <label><input name="userType" type="radio" value="Decline">
                                        Decline
                                    </input></label></br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 panel-headinzzzzg">
                                    <label class="col-md-2 col-md-offset-2"></label>
                                    <div class="btn-bottom ">
                                        {!! Form::submit('Submit',['class' => 'btn btn-success','name'=> 'store', 'id'=>'submitButton']) !!}
                                        <a href="{{ URL::previous() }}" class="btn btn-danger" id="cancelButton">Cancel</a>
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
