@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard </div>

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
                        <div>
                            <div class="row">                    
                                <div class="col-md-6">
                                    <h4>{{ Auth::user()->userName }}'s Connections</h4>
                                    @if ($count > 0)
                                        <p>{{ Auth::user()->userName }} has {{count($count)}} connections</p>
                                    @else
                                        <p>{{ Auth::user()->userName }} has no connections</p>
                                    @endif
                                    @foreach($connections as $connection)
                                        <p> {{$connection->connection}} </p>
                                    @endforeach
                                    @foreach($users as $user)
                                        <p> {{$user->user}} </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
