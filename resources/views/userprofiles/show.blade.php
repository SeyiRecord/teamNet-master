@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"><H2>{{"$userprofile->fName $userprofile->lName"}}</H2><H2>User Dashboard</H2></div>
                <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::model($userprofile,['method' => 'PUT', 'route' => ['userprofiles.update', $userprofile->id], 'files' => true]) !!}
                        <div class="row">                    
                            <div class="col-md-6 ">
                                {!! Form::label('fName', 'First Name', ['class' => 'control-label']) !!}
                                {!! Form::text('fName', old('fName'), ['class' => 'form-control', 'placeholder' => '', 'disabled'=>'disabled','disabled'=>'disabled']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('fName'))
                                    <p class="help-block">,'disabled'=>'disabled'
                                        {{ $errors->first('fName') }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">                    
                            <div class="col-md-6">
                                {!! Form::label('lName', 'Last Name', ['class' => 'control-label']) !!}
                                {!! Form::text('lName', old('lName'), ['class' => 'form-control', 'placeholder' => '', 'disabled'=>'disabled']) !!}
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
                                {!! Form::textarea('profileSummary', old('profileSummary'), ['class' => 'form-control', 'placeholder' => '', 'disabled'=>'disabled']) !!}
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
                                {!! Form::text('city', old('city'), ['class' => 'form-control', 'placeholder' => '', 'disabled'=>'disabled']) !!}
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
                                {!! Form::text('state', old('state'), ['class' => 'form-control', 'placeholder' => '', 'disabled'=>'disabled']) !!}
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
                                {!! Form::text('country', old('country'), ['class' => 'form-control', 'placeholder' => '', 'disabled'=>'disabled']) !!}
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
                                <h4>{{ Auth::user()->userName }}'s Connections</h4>
                                @if ($count > 0)
                                    <p>{{ Auth::user()->userName }} has {{$count}} connections</p>
                                @else
                                    <p>{{ Auth::user()->userName }} has no connections</p>
                                @endif
                            </div>
                        </div>

                    </form>
                    {!! Form::close() !!}

                    <div class="row">
                        <div class="col-xs-10 col-sm-10 col-md-12">
                        <h4>{{count($userprofile->comment)}} PREVIOUS COMMENTS</h4>
                            @foreach($userprofile->comment as $comments)
                                <div class="comment">
                                    <table>
                                        <body>
                                            <tr><td><strong>{{$comments->user}}: </strong><h6>{{$comments->created_at}}</h6></td></tr>
                                            <tr><td>{{$comments->body}}</td> </tr>
                                            <tr>
                                                @if($comments->user == Auth::user()->userName)
                                                    <td><a href="{{route('comments.edit', $comments->id)}}" class="btn btn-xs btn-primary">Edit</a></td>
                                                @endif
                                                @if($comments->user == Auth::user()->userName || Auth::user()->userType == "Admin")<td><a href="{{route('comments.delete', $comments->id)}}" class="btn btn-xs btn-danger">Delete</a></td>
                                                @endif
                                            </tr>
                                            <br>
                                        </body>
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div id="comment-form" class="col-xs-12 col-sm-12 col-md-12">
                            <div id="comment-form">
                                {{Form::open(['route' => ['comments.userComment', $userprofile->id], 'method' => 'POST']) }}
                                <div class="col-md-6">
                                    {{Form::label('body', "Make a Comment:")}}
                                    {{Form::textarea('body', null, ['class' => 'form-control', 'rows' => '5'])}} <br>

                                    {{Form::submit('Add Comment', ['class' => 'btn btn-success btn-block'])}}
                                </div>
                                {{Form::close() }}
                            </div>
                        </div>
                    </div>
                    <h4><a href = "/connections/save/{{$userprofile->userName}}">Connect with {{"$userprofile->fName $userprofile->lName"}} </a> </h4>
                    <h4><a href = "/createresearch">Create New Research</a> </h4>
                    <h4><a href = "/researches">List My Researches</a> <br></h4>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
