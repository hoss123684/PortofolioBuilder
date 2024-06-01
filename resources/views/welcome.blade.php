<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">

        <!-- Styles -->
        
    </head>
        <body class="antialiased">
            <div class="overlay">
            <img src="assets/imges/99.jpg" alt="">
        </div>
        <div class="home">
            <div class="home-content">
                <p class="pa-welcome">Welcome to</p>
                <h1>Lawrental.</h1>
                <p class="pa-let">Let's take it more professionally</p>
            </div>
        @if (Route::has('register'))
            <div class="home-btn">
                <a href="{{ route('register') }}" class="btn ">Launch Your Website</a>
                <div>
        @endif            
                <p>You have an account?</p>
                @if (Route::has('login'))
               <a href="{{ url('/dashboard') }}" class="log-in">log in</a>
                @else
                    <a href="{{ route('login') }}" class="log-in">log in</a>
                @endif
            </div>
            </div>
        </div>
        </body>
</html>