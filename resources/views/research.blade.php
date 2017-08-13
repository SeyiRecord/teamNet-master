@extends('header')
<?php
    define("TITLE", "Research");
    
?>

	<div class="content">
        <div class="title m-b-md">
            Research
        </div>

        <div style="text-align: center;">
	        <!-- <div style="text-align: left;">  -->
	            <p><strong>Past Research</strong> </p> <br><br>

	            <p> <strong>Current Research</strong></p><br><br>
	        <!-- </div> -->

	        <a href="{{ url('/createResearch') }}">Add new research</a>
        </div>
    </div>

@extends('footer')