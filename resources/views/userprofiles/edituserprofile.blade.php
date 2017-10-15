@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2>Edit Profile Dashboard</div>

                <div class="panel-body">
                    <form class="form-horizontal" method='POST' action='/profileform'>
                    {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update', $user->userName]]) !!}
                    {{ csrf_field() }}

                    <div class="row">                    
                        <div class="col-md-6 form-group">
                            {!! Form::label('fName', 'fName*', ['class' => 'control-label']) !!}
                            {!! Form::fName('fName', old('fName'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('fName'))
                                <p class="help-block">
                                    {{ $errors->first('fName') }}
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
