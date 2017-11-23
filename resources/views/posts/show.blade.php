@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Read Post</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <h4><strong>Title:</strong>
                        {{ $post->title }}</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Content:</strong>
                        {{ $post->content }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Published On:</strong>
                        {{ $post->created }}
                    </div>
                </div> <br>
            </div>

            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-12">
                <h4>{{$post->comment->count()}} PREVIOUS COMMENTS</h4>
                    @foreach($post->comment as $comments)
                        <div class="comment">
                            <table>
                                <body>
                                    <tr><td><strong>{{$comments->user}}</strong><h6>{{$comments->created_at}}</h6></td></tr>
                                    <tr><td>{{$comments->body}}</td> </tr>
                                    <tr><td><a href="{{route('comments.edit', $comments->id)}}" class="btn btn-xs btn-primary">Edit</a> <a href="{{route('comments.destroy', $comments->id)}}" class="btn btn-xs btn-danger">Delete</a></td>
                                    </tr><br>
                                </body>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>

            <div class="row">
                <div id="comment-form" class="col-xs-12 col-sm-12 col-md-12">
                    <div id="comment-form">
                        {{Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
                        <div class="col-md-6">
                            {{Form::label('body', "Make a Comment:")}}
                            {{Form::textarea('body', null, ['class' => 'form-control', 'rows' => '5'])}} <br>

                            {{Form::submit('Add Comment', ['class' => 'btn btn-success btn-block'])}}
                        </div>
                        {{Form::close() }}
                    </div>
                </div>
            </div>
            <a href="{{ route('posts.index') }}" class="btn btn-success pull-right">Back</a>
        </div>
    </div>
</div>
@endsection