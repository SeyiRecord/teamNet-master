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
                        <a href="{{ route('posts.index') }}" class="btn btn-success pull-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection