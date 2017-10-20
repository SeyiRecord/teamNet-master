@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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
                            <a href = "/userprofiles/showuser/{{$id}}" target="_blank">View User Profile</a>
                            <a href = "/userprofiles/edituserprofile/{{$id}}" target="_blank">Edit User Profile</a> <br>
                            <a href = "/researches" target="_blank">List All Researches</a>
                            <a href = "/createresearch" target="_blank">Create Research</a>
                        </div>
                        <p>Search Button</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
