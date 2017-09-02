@extends('header')
<?php
    define("TITLE", "Research Details");
    
?>

	<div class="content">
        <div class="title m-b-md">
            Research Details<br>
        </div>

        <div style="text-align: center;">
	        <b>Topic</b> <br><br>
            <b>Research/Project Details</b> <br><br>
            <b>Start Date</b> <br><br>
            <b>End Date</b> <br><br>
            <b>Address</b> <br><br>
            <b>City</b> <br><br>
            <b>State</b> <br><br>
            <b>Country</b> <br><br>
            <b>ZipCode</b> <br><br>

	        <a href="{{ url('/createResearch') }}">Add new research</a>
        </div>
    </div>

@extends('footer')