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
                    <form class="form-horizontal" method="POST" action="{{ route('userType') }}">
                        {{ csrf_field() }}

                      
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <label>Select your status :</label><br/>
                                <label><input checked="checked" name="userType" type="radio" value="Student">
                                    Student
                                </input></label></br>
                                <label><input name="userType" type="radio" value="Faculty">
                                    Faculty
                                </input></label></br>
                                <label><input name="userType" type="radio" value="Organization">
                                    Organization
                                </input></label></br>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
