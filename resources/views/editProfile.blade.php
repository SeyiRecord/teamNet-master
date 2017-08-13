@extends('header')
<?php
    define("TITLE", "My Profile");
    
?>

	<div class="content">
        <div class="title m-b-md">
            Profile Page
        </div>

        <div style="text-align: center;">
	        <!-- <div style="text-align: left;">  -->
	            <form>
	                <label><b>First Name</b></label>
	                <input type="text" placeholder="Enter first name" name="fName" required> <br><br>

	                <label><b>Last Name</b></label>
	                <input type="text" placeholder="Enter last name" name="lName" required> <br><br>

	                <label><b>UserName</b></label>
	                <input type="text" name="userName" required> <br><br>

	                <label><b>Email</b></label>
	                <input type="text" placeholder="Enter unomaha email address" name="eMail" required> <br><br>

	                <label><b>Password</b></label>
	                <input type="password" placeholder="6 or more characters" name="pass" required> <br><br>

	                <label><b>Upload image</b></label>
	                <input type="file" name="profileImg" id="profileImg"><br><br>

	                <label><b>Add Personal Statement</b></label> <br>
	                <textarea rows="4" cols="50" name="details"> Enter text here...</textarea><br><br>

	                <button type="submit">Save</button>
	                <input type="checkbox" checked="checked">
	                
	            </form>
	            <a href="{{ url('/requestPassword') }}">Forgot your password?</a>
	        <!-- </div> -->
        </div>
    </div>

@extends('footer')