<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="/vendor/bootstrap/bootstrap.css">
    <!-- <link rel="stylesheet" href="{{asset('assets')}}/css/log-in.css"> -->
    <link rel="stylesheet" href="assets/css/log-in.css">
</head>
<body>
    
    <div class="overlay">
        <img src="{{asset('assets')}}/imges/interior-design-old-architecture.jpg" alt="">
    </div>
    <div class="logo">
        <img src="{{asset('assets')}}/imges/Untitled-1.png" alt="">
        <h2>Lawrental.</h2>
    </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') :  route('login') }}" class="form">
        @csrf
        <input type="email" placeholder="email" id="email" name="email" :value="old('email')" required autocomplete="username" required>
        @if ($errors->has('email'))
        <p><i class="fa-solid fa-circle-exclamation icon"></i> {{ $errors->first('email') }}</p>
        @endif

        
        
        
        <input type="password" placeholder="Password" id="password" type="password" name="password" required autocomplete="new-password">
        @if ($errors->has('password'))
        <p><i class="fa-solid fa-circle-exclamation icon"></i> {{ $errors->first('password') }}</p>
          @endif


        <button class="btn1 " >Log In</button>
    
        
    </form>
<div class="sign-up">
    <p class="sign-up-p">You don't have an account?</p>
    <a href="{{ route('register') }}" class="sign-up-a">Sign Up</a></div>
</body>
</html>