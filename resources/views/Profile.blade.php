@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <H1>Personal Details</H1>
                        <form>
                            <label><b>User Name: </b></label>
                            <strong> {{ Auth::user()->userName }}</strong><br><br>

                            <label><b>First Name</b></label>
                            <input type="text" placeholder="Enter first name" name="fName" required> <br><br>

                            <label><b>Middle Initial </b></label>
                            <input type="text" name="MI" required> <br><br>

                            <label><b>Last Name</b></label>
                            <input type="text" placeholder="Enter last name" name="lName" required> <br><br>

                            <label><b>Email</b></label>
                            <input type="text" placeholder={{ Auth::user()->email }} name="eMail" required> <br>
                  
                            <button type="submit">Save</button> <br>
                        </form>
                    </div>
                
                    <div>
                        <H2>Address</H2>
                        <form>
                            <label><b>Upload image</b></label>
                            <input type="file" name="profileImg" id="profileImg"><br><br>

                            <label><b>Address</b></label>
                            <textarea rows="3" cols="50" name="address"> Enter address here...</textarea><br>

                            <label><b>City</b></label>
                            <input type="text" name="city"> <br><br>

                            <label><b>State</b></label>
                            <input type="text" name="state"> <br><br>

                            <label><b>Country</b></label>
                            <input type="text" name="country"> <br><br>

                            <label><b>ZipCode</b></label>
                            <input type="text" name="zipCode">

                            <button type="submit">Save</button>
                        </form>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
