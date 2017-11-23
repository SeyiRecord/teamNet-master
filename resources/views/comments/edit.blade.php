@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            	<div id="comment-form" class="col-md-6">
	            	{{Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}
	            		{{Form::label('body', "Edit Comment:")}}
	                        {{Form::textarea('body', null, ['class' => 'form-control', 'rows' => '5'])}} <br>
	                        {{Form::submit('Edit Comment', ['class' => 'btn btn-success btn-block'])}}
	            	{{Form::close()}}
	            </div>
            </div>
        </div>

    </div>
</div>
@endsection