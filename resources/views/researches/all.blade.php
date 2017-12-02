@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2>Research Page</div>
                <div class="panel-body">
                
                    @if(count($researches) > 0)
                        <strong><h1> List of Researches </h1></strong>
                        <div class="panel panel-default Search" id="create-2">
                            <div class="panel-body">
                                <table data-toolbar="#toolbar" data-toggle="table" data-search="true" data-cookie="true" data-click-to-select="true" data-cookie-id-table="station-index-v1.1-1" data-show-columns="true" class="table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true">Topic</th>
                                            <th data-sortable="true">Start Date </th>
                                            <th data-sortable="true">End Date </th>
                                            <th data-sortable="true">Organization</th>
                                            <th data-sortable="true">Location</th>
                                            <th data-sortable="true">City </th>
                                            <th data-sortable="true">State </th>
                                            <th data-sortable="true">Country</th>
                                            <th data-switchable="false" data-searchable="false" data-sortable="false">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach($researches as $research)
                                        <tr>
                                            <td><a href="/researches/{{$research->id}}" target="_blank">{{$research->topic}}</a></td>
                                            <td>{{$research->startDate}}</td>
                                            <td>{{$research->endDate}}</td>
                                            <td>{{$research->organization}}</td>
                                            <td>{{$research->location}}</td>
                                            <td>{{$research->city}}</td>
                                            <td>{{$research->state}}</td>
                                            <td>{{$research->country}}</td>
                                            <td><a href="/researches/editresearch/{{$research->id}}" target="_blank">Edit </a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <p>No research created!</p>
                    @endif
                            
                    <h3><a class="btn btn-success" href = "/researches/">List My Researches</a></h3>
                    <h3><a class="btn btn-success" href = "/createresearch">Create Research</a> </h3>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection