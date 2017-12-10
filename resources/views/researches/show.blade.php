@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"><H2></H2>Show Research Dashboard</div>
                    <div class="panel-body">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Research Topic: </strong>
                                {{ $research->topic }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Research Summary: </strong>
                                {{ $research->summary }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Start Date: </strong>
                                {{ $research->startDate }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>End Date: </strong>
                                {{ $research->endDate }}
                            </div>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Organization: </strong>
                                {{ $research->organization }}
                            </div>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Location: </strong>
                                {{ $research->location }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>City: </strong>
                                {{ $research->city }}
                            </div>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>State: </strong>
                                {{ $research->state }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Country: </strong>
                                {{ $research->country }}
                            </div>
                        </div><br>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Zip Code: </strong>
                                {{ $research->zipCode }}
                            </div>
                        </div> <br>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Research Paper: </strong>
                                {{ $research->researchpaper }}
                            </div>
                        </div> <br>
                    </div>

                    <div class="row">
                        <div class="col-xs-10 col-sm-10 col-md-12">
                        <h4>{{$research->comment->count()}} PREVIOUS COMMENTS</h4>
                            @foreach($research->comment as $comments)
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
                                {{Form::open(['route' => ['comments.resComment', $research->id], 'method' => 'POST']) }}
                                <div class="col-md-6">
                                    {{Form::label('body', "Make a Comment:")}}
                                    {{Form::textarea('body', null, ['class' => 'form-control', 'rows' => '5'])}} <br>

                                    {{Form::submit('Add Comment', ['class' => 'btn btn-success btn-block'])}}
                                </div>
                                {{Form::close() }}
                            </div>
                        </div>
                    </div>

                    @if($research->ownerID != Auth::user()->userName)
                        <h4><a href = "/participations/{{$research->id}}">Participate in Research</a> </h4>
                    @endif
                    <h4><a href = "/createresearch">Create New Research</a> </h4>
                    <h4><a href = "/researches">List Researches</a> <br></h4
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
