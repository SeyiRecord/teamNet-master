@extends('app')

@section('content')
    <h1>Organization Profile Page</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Company Name</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($orgprofiles as $orgprofile)
            <tr>
                <td>{{ $orgprofile->name }}</td>
                <td>{{ $orgprofile->city }}</td>
                <td>{{ $orgprofile->state }}</td>
                <td>{{ $orgprofile->country}}</td>
            </tr> 
            
        @endforeach
        </tbody>
    </table>
@endsection