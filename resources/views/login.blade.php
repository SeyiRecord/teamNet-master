<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

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
        </div>
    </body>
</html>
