@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>{{ Auth::user()->userName }}</H2>Research Page</div>
                <div class="panel-body">
                    <a href = "/createresearch">Create Research</a>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection