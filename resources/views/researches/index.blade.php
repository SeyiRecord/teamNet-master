@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2>Research Page</div>
                <div class="panel-body">
                
                    @if(count($researches) > 1)
                        <strong><h1> List of Researches </h1></strong>
                        <div class="panel-body">
                            <table >
                                @foreach($researches as $research)
                                @if($research->ownerID == Auth::user()->userName)
                                <thead>
                                    <tr>
                                        <th>Topic&emsp;</th>
                                        <th>Start Date </th>
                                        <th>End Date </th>
                                        <th>Organization&emsp;</th>
                                        <th>Location&emsp;</th>
                                        <th>City &emsp;</th>
                                        <th>State &emsp;</th>
                                        <th>Country&emsp;</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="/researches/showresearch/{{$research->id}}" target="_blank">{{$research->topic}}</a>&emsp;</td>
                                        <td>{{$research->startDate}}&emsp;</td>
                                        <td>{{$research->endDate}}&emsp;</td>
                                        <td>{{$research->organization}}&emsp;</td>
                                        <td>{{$research->location}}&emsp;</td>
                                        <td>{{$research->city}}&emsp;</td>
                                        <td>{{$research->state}}&emsp;</td>
                                        <td>{{$research->country}}&emsp;</td>
                                        <td><a href="/researches/editresearch/{{$research->id}}" target="_blank">Edit </a></td>
                                    </tr>
                                @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>No research created!</p>
                    @endif
                    <h3><a href = "/createresearch">Create Research</a> </h3>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection