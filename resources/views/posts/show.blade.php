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
                <div class="col-md-8 col-md-offset-2">
                    @foreach($post->comment as $comments)
                        {{$comments->body}};
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div id="comment-form" class="col-xs-12 col-sm-12 col-md-12">
                    <div id="comment-form">
                        {{Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
                        <div class="col-md-6">
                            {{Form::label('body', "Comment:")}}
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