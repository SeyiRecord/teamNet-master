@extends('header')
<?php
    define("TITLE", "Edit Research");
    
?>

	<div class="content">
        <div class="title m-b-md">
            Edit Research
        </div>

        <div style="text-align: center;">
	        <form>
                <label><b>Topic</b></label>
                <input type="text" placeholder="Enter research/project topic" required> <br><br>

                <label><b>Research/Project Details</b></label> <br>
                <textarea rows="4" cols="50" name="researchDetails" required> Enter text here...</textarea><br><br>

                <label><b>Start Date</b></label>
                <input type="text" name="startDate" required> <br><br>

                <label><b>End Date</b></label>
                <input type="text" name="endDate" required> <br><br>

                <textarea rows="3" cols="50" name="address" required> Enter address here...</textarea><br><br>

                <label><b>City</b></label>
                <input type="text" name="city" required> <br><br>

                <label><b>Country</b></label>
                <input type="text" name="country" required> <br><br>

                <label><b>Zipcode</b></label>
                <input type="text" name="zipcode" required> <br><br>

                <button type="submit">Save</button>
                
            </form>

        </div>
    </div>

@extends('footer')