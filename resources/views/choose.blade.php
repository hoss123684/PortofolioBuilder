<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/choose-website.css">
</head>
<body>
    <nav>
            <h2>Lawrental.</h2>
        
      </nav>
      <p class="p-title">Pick the Website style You Love
    </p>
        <div class="website-style-img">

            <div>
                <!-- <img src="assets/imges/Capture2.PNG" alt="" onclick="createwebsite(this.src)"> -->
                <a href="{{ route('create.web', ['template' => 'site1']) }}">
                    <img src="{{ asset('assets/images/Capture1.PNG') }}" alt="">
                </a>
            </div>


            <div  >
                <a href="{{ route('create.web', ['template' => 'site2']) }}">
                    <img src="{{ asset('assets/images/Capture2.PNG') }}" alt="">
                </a>
            </div>
            <div>
                <a href="{{ route('create.web', ['template' => 'site3']) }}">
                    <img src="{{ asset('assets/images/Capture3.PNG') }}" alt="">
                </a>
            </div>


            <div  >
                <a href="{{ route('create.web', ['template' => 'site4']) }}">
                    <img src="{{ asset('assets/images/Capture4.PNG') }}" alt="">
                </a>
            </div>
            <div  >
                <a href="{{ route('create.web', ['template' => 'site5']) }}">
                    <img src="{{ asset('assets/images/Capture5.PNG') }}" alt="">
                </a>
            </div>
            <div  >
                <a href="{{ route('create.web', ['template' => 'site6']) }}">
                    <img src="{{ asset('assets/images/Capture6.PNG') }}" alt="">
                </a>
            </div>

    </div>






    <script src="assets/js/choose-website.js"></script>
</body>
</html>