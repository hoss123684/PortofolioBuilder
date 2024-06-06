<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href=" {{asset("assets")}}/css/sign-up.css">
    <link rel="stylesheet" href="assets/css/sign-up.css">
    <!-- @vite(['resources/css/app.css']) -->
</head>
<body>
    
    <div class="overlay">
        <img src=" {{asset("assets")}}/imges/interior-design-old-architecture.jpg" alt="">
    </div>
    <div class="logo">
        <img src=" {{asset("assets")}}/imges/Untitled-1.png" alt="">
        <h2>Lawrental.</h2>
    </div>

    <form method="POST" action="{{ route('register') }}" class="form">
        @csrf
        <input type="text" placeholder="Name" id="name" name="name" :value="old('name')" autofocus autocomplete="name" required>
        @if ($errors->has('name'))
            <p><i class="fa-solid fa-circle-exclamation icon"></i> {{ $errors->first('name') }}</p>
        @endif

        <input type="email" placeholder="email" id="email" name="email" :value="old('email')" required autocomplete="username" required>
        @if ($errors->has('email'))
            <p><i class="fa-solid fa-circle-exclamation icon"></i> {{ $errors->first('email') }}</p>
        @endif

        <input type="text" placeholder="Phone Number" name="phone" :value="old('number')" required>
        @if ($errors->has('phone'))
            <p><i class="fa-solid fa-circle-exclamation icon"></i> {{ $errors->first('phone') }}</p>
        @endif

        <input type="text" placeholder="Specialty" name="specialty" required>
        @if ($errors->has('specialty'))
            <p><i class="fa-solid fa-circle-exclamation icon"></i> {{ $errors->first('specialty') }}</p>
        @endif

        <input type="password" placeholder="Password" id="password" type="password" name="password" required autocomplete="new-password">
        @if ($errors->has('password'))
            <p><i class="fa-solid fa-circle-exclamation icon"></i> {{ $errors->first('password') }}</p>
        @endif

        <input type="password" placeholder="Confirm Password" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        @if ($errors->has('password_confirmation'))
            <p><i class="fa-solid fa-circle-exclamation icon"></i> {{ $errors->first('password_confirmation') }}</p>
        @endif

        <button class="btn1 ">Sign Up</button>
        <div class="log-in"> <p class="log-in-p">You have an account?</p>
            <a href="{{ route('login') }}" class="log-in-a">Log in</a></div>

        <!-- <div class="log-in"> <p class="log-in-p">You have an account?</p>
                    <a href="{{ route('login') }}" class="log-in-a">log in</a></div> -->
</form>

    
</body>
</html>