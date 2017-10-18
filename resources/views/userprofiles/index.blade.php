@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2><h1>Profile Page</h1></div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <th>User Name</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Profile Summary</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userProfiles as $userprofile)
                            <tr>
                                <td>{{ $userprofile->id }}</td>
                                <td>{{ $userprofile->fName }}</td>
                                <td>{{ $userprofile->lName }}</td>
                                <td>{{ $userprofile->profileSummary }}</td>
                                <td>{{ $userprofile->city }}</td>
                                <td>{{ $userprofile->state }}</td>
                                <td>{{ $userprofile->country}}</td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection