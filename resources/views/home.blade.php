@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <form action="/users/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search Users"> <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search">Search</span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="content">
                        <div class="title m-b-md">
                            TeamNet
                        </div>
                            Welcome <strong>{{Auth::user()->userName }}</strong>! <br>

                        <div class="links">
                            <a href = "/userprofiles/show/{{$id}}" target="_blank">View User Profile</a>
                            <a href = "/userprofiles/edituserprofile/{{$id}}" target="_blank">Edit User Profile</a> <br>
                            <a href = "/researches/all" target="_blank">List All Researches</a>
                            <a href = "/createresearch" target="_blank">Create Research</a> <br>
                            <a href = "/posts" target="_blank">List All Posts</a>
                            <a href = "/posts/create" target="_blank">Create Post</a>
                        </div>

                        <div>
                            <form action="/researches/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" placeholder="Search Research"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search">Search</span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
