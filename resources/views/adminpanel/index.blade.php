@extends('layouts.app')
@section('crumbs')
    <ol class="breadcrumb">
        <li class="active">Admin Panel</li>
    </ol>
@endsection


@section('content')

        <!-- bottom navigation icons start here-->
    <div class="container">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard </div>
                <div class="content">
                    <div class="row" style="margin: inherit">
                        <a href="{{ route('users.index') }}">
                            <div class="col-md-4 large-category">
                                <div class="btn btn-success">
                                    <div class="thumbnail-dash" id="fmlaLink">
                                        <i class="fa fa-upload fa-4x" aria-hidden="true"></i>
                                    </div>
                                    <div class="caption">
                                        <h3>List of Users</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="researches/all">
                            <div class="col-md-4 large-category">
                                <div class="btn btn-success">
                                    <div class="thumbnail-dash" id="fmlaLink">
                                        <i class="fa fa-upload fa-4x" aria-hidden="true"></i>
                                    </div>
                                    <div class="caption">
                                        <h3>List of Researches</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Bottom navigation icons ends here-->
@endsection
