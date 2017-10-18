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

                    You are logged in as <strong>{{Auth::user()->userName }}</strong>! <br>

                    <!-- Add View User Link -->
                    
                    <h4><a href = "/orgprofiles/showorg/{{$id}}" target="_blank">View Organization Profile</a> </h4>
                    <h4><a href = "/orgprofiles/editorgprofile/{{$id}}" target="_blank">Edit Organization Profile</a> </h4>
                    <h4><a href = "/createresearch">Create Research</a> </h4>
                    <h4><a href = "/researches">List Research</a> <br></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
