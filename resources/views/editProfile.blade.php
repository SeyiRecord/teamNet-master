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
	        <H1>Personal Details</H1>
	            <form>
	                <label><b>First Name</b></label>
	                <input type="text" placeholder="Enter first name" name="fName" required> <br><br>

	                <label><b>Middle Initial </b></label>
	                <input type="text" name="MI" required> <br><br>

	                <label><b>Last Name</b></label>
	                <input type="text" placeholder="Enter last name" name="lName" required> <br><br>

	                <label><b>UserName</b></label>
	                <input type="text" name="userName" required> <br><br>

	                <label><b>Email</b></label>
	                <input type="text" placeholder="Enter unomaha email address" name="eMail" required> <br><br>

	                <label><b>Current password</b></label>
	                <input type="password" placeholder="Type current password" name="password" required> <br><br>

	                <label><b>Set new password</b></label>
	                <input type="password" placeholder="Type new password" name="newPassword" required> <br><br>

	                <label><b>Retype new password</b></label>
	                <input type="password" placeholder="Retype new password" name="newPassword" required>

	                <button type="submit">Save</button>
	            </form>

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

	             <H1> Education </H1>
	             <form></form>

	             <H1> Career </H1>
	             <form>
	             	<label><b>Edit personal statement</b></label> <br>
	                <textarea rows="4" cols="50" name="details"> Enter text here...</textarea><br>

	             </form>
	        <!-- </div> -->
        </div>
    </div>

@extends('footer')