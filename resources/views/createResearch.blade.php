@extends('header')
<?php
    define("TITLE", "Create Research");
    
?>

	<div class="content">
        <div class="title m-b-md">
            Add Research / Project
        </div>

        <div style="text-align: center;">
	        <!-- <div style="text-align: left;">  -->
	            <form>
	                <label><b>Title</b></label>
	                <input type="text" placeholder="Enter research title" required> <br><br>

	                <label><b>Research/Project Details</b></label> <br>
	                <textarea rows="4" cols="50" name="researchDetails" required> Enter text here...</textarea><br><br>

	                <label><b>Start Date</b></label> <br>
	                <input type="text" name="startDate" required> <br><br>

	                <button type="submit">Save</button>
	                <input type="checkbox" checked="checked">
	                
	            </form>
	        <!-- </div> -->
        </div>
    </div>

@extends('footer')