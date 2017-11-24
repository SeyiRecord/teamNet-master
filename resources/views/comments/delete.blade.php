@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            	<div id="comment-form" class="col-md-6">
	            	<h1>DELETE THIS COMMENT?</h1>
                    <p>{{$comment->body}} </p>
                    {{Form::model($comment, ['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
                        {{Form::submit('YES, DELETE THIS COMMENT', ['class' => 'btn btn-success btn-block'])}}
                    {{Form::close()}}
	            </div>
            </div>
        </div>

    </div>
</div>
@endsection