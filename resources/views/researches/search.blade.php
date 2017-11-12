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
                    You are logged in as <strong>{{ Auth::user()->userName }}</strong>!
                </div>
                <div class="panel-body">
                    @if(isset($details))
                        <p> Search query "<b> {{ $query }} </b>"</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Topic</th>
                                <th>Summary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $research)
                            <tr>
                                <td>{{$research->ownerID}}</td>
                                <td>{{$research->topic}}</td>
                                <td>{{$research->summary}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection