@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2>Research Page</div>
                <div class="panel-body">
                    <h3><a href = "/createresearch">Create Research</a> </h3>
                
                    @if(count($researches) > 0)
                        <strong><h1> List of Researches </h1></strong>
                        <div class="panel-body">
                            <table >
                                <thead>
                                    <tr>
                                        <th>Topic</th>
                                        <th>Summary</th>
                                        <th>Start Date </th>
                                        <th>End Date </th>
                                        <th>Location&emsp;</th>
                                        <th>City &emsp;</th>
                                        <th>State &emsp;</th>
                                        <th>Country&emsp;</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($researches as $research)
                                    @if($research->ownerID == Auth::user()->userName)
                                    <tr>
                                        <td>{{$research->topic}}</td>
                                        <td>{{$research->summary}}</td>
                                        <td>{{$research->startDate}}</td>
                                        <td>{{$research->endDate}} </td>
                                        <td>{{$research->location}}&emsp;</td>
                                        <td>{{$research->city}}&emsp;</td>
                                        <td>{{$research->state}}&emsp;</td>
                                        <td>{{$research->country}}&emsp;</td>
                                        <td><a href="/researches/showresearch/{id}">Show </a></td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection