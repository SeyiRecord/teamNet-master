<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Signup</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/publicStyles.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Signup Page
                </div>

                <div>
                    <form>
                        <label><b>First Name</b></label>
                        <input type="text" placeholder="Enter first name" name="fName" required> <br><br>

                        <label><b>Last Name</b></label>
                        <input type="text" placeholder="Enter last name" name="lName" required> <br><br>

                        <label><b>Email</b></label>
                        <input type="text" placeholder="Enter unomaha email address" name="eMail" required> <br><br>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="6 or more characters" name="pass" required> <br><br>

                        <button type="submit">Signup</button>
                        <input type="checkbox" checked="checked"> Remember me
                        
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
