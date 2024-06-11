<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/site1.css" />
</head>
<body>
    @if ($profiles->isNotEmpty())
        @foreach ($profiles as $profile)
            <h1 class="tittleofname" id="tittleofname">{{ $profile->site_name }}</h1>
            <div class="homecontent" id="homecontent">
                <div>
                    <h3>specialized :</h3>
                    <p class="specialized-p">{{ $profile->specialized }}</p>
                </div>
                <div>
                    <h3>Experience :</h3>
                    <p class="Experience-p">{{ $profile->experience }}</p>
                </div>
                <div>
                    <h3>about me :</h3>
                    <p class="about-p">{{ $profile->about_me }}</p>
                </div>
            </div>
            <!-- <div class="imgbox">
                <img class="lawer-img" src="{{ $profile->photo_url }}" alt="Profile Photo">
            </div> -->
            <footer>
                <div class="container">
                    <div>
                        <h3>Address :</h3>
                        <p class="address1-p">{{ $profile->first_address }}</p>
                        <p class="address2-p">{{ $profile->second_address }}</p>
                        <p class="address3-p">{{ $profile->third_address }}</p>
                    </div>
                    <div>
                        <h3>phone :</h3>
                        <p class="phone1-p">{{ $profile->first_phone }}</p>
                        <p class="phone2-p">{{ $profile->second_phone }}</p>
                    </div>
                </div>
            </footer>
        @endforeach
    @else
        <p>No profiles found.</p>
    @endif
    <script src="{{ asset('assets/js/choose-website.js') }}"></script>
</body>
</html>
