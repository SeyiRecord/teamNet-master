@extends('header');
<?php
    define("TITLE", "Login");
    
?>

    <div class="content">
        <div class="title m-b-md">
            Login Page
        </div>

        <div>
            <form>
                <label><b>userName</b></label>
                <input type="text" name="userName" required> <br><br>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required> <br><br>

                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
                
            </form>
            <a href="{{ url('/requestPassword') }}">Forgot your password?</a>
        </div>
    </div>

@extends('footer')