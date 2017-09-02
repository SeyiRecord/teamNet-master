@extends('header')
<?php
    define("TITLE", "Signup");
    
?>

    <div class="content">
        <div class="title m-b-md">
            Signup Page
        </div>

        <div>
            <form>
                <label><b>First Name</b></label>
                <input type="text" placeholder="Enter first name" name="fName" required> <br><br>

                <label><b>Middle Initial</b></label>
                <input type="text" name="MI" required> <br><br>

                <label><b>Last Name</b></label>
                <input type="text" placeholder="Enter last name" name="lName" required> <br><br>

                <label><b>userName</b></label>
                <input type="text" name="userName" required> <br><br>

                <label><b>Email</b></label>
                <input type="text" placeholder="Enter unomaha email address" name="eMail" required> <br><br>

                <label><b>Password</b></label>
                <input type="password" placeholder="6 or more characters" name="pass" required> <br><br>

                <button type="submit">Signup</button>
                <input type="checkbox" checked="checked"> Remember me
            </form>
        </div>
    </div>

@extends('footer')