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
                                        <p>{{ Auth::user()->userName }} has {{$count}} connections</p>
                                    @else
                                        <p>{{ Auth::user()->userName }} has no connections</p>
                                    @endif
                                    <table>
                                        <thead>
                                            <th>User Name</th>
                                            <th>Action</th>
                                        </thead>
                                        <body>
                                            <tr>
                                            @foreach($connectionMe as $connectionMe)
                                                <td><a href="/userprofiles/showuser/{{$userprofile->id}}" target="_blank">{{$connectionMe->connection}}</a></td>
                                                <td>Show</td>
                                            @endforeach
                                            </tr>
                                            <tr>
                                            @foreach($myConnections as $myConnection)
                                                <td><a href="/userprofiles/showuser/{{$userprofile->id}}" target="_blank">{{$myConnection->user}}</a></td>
                                                <td>Show</td>
                                            @endforeach
                                            </tr>
                                        </body>
                                    </table>
                                    
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
