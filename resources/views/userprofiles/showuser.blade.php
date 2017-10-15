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

                        <div class="row">
                            <div class="col-md-8 form-group">
                                {!! Form::label('fName', 'fName', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-6 ">
                                    {!! Form::text('fName', old('fName'), array('class' => 'form-control','id' => 'fName','required' => 'required','disabled'=>'disabled'))!!}
                                    <p class="help-block"></p>
                                    @if($errors->has('fName'))
                                        <p class="help-block">
                                            {{ $errors->first('fName') }}
                                        </p>
                                    @endif
                                </div> 
                            </div>
                        </div>

                    </form>
                    {!! Form::close() !!}
                    <h4><a href = "/createresearch">Create New Research</a> </h4>
                    <h4><a href = "/researches">List Researches</a> <br></h4
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
