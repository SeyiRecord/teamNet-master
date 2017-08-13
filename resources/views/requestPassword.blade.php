@extends('header')
<?php
    define("TITLE", "Password Request");
    
?>

    <div class="content">
        <div class="title m-b-md">
            Request Password
        </div>

        <div>
            <form>
                <label><b>Please enter your email</b></label> <br>
                <input type="text" name="eMail" required> <br><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    
@extends('footer')