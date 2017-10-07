@extends('app')

@section('content')
    <h1>Profile Page</h1>
    <hr>
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
        @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile->profileID }}</td>
                <td>{{ $profile->fName }}</td>
                <td>{{ $profile->lName }}</td>
                <td>{{ $profile->profileSummary }}</td>
                <td>{{ $profile->city }}</td>
                <td>{{ $profile->state }}</td>
                <td>{{ $profile->country}}</td>

            </tr> 
            
            <!-- <tr>
                <td>User Name</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Profile Summary</td>
                <td>City</td>
                <td>State</td>
                <td>Country</td>

            </tr>-->
            
        @endforeach
        </tbody>
    </table>
@endsection