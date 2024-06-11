<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/site1.css" />
  </head>
  <body>
    <h1 class="tittleofname" id="tittleofname">bassam saied mohamed</h1>
    <div class="homecontent" id="homecontent">
        <div>
    <h3>specialized :</h3><p class="specialized-p">Criminal , Employment , Family</p></div>
    <div><h3>Experience :</h3><p class="Experience-p">10 years</p></div>
    
    <div><h3 >about me :</h3><p class="about-p">Lawyers are considered cornerstones of the legal
      system, helping to achieve justice and ensure the fair application of the
      law. Working as a lawyer requires high analytical and critical thinking
      skills, along with the ability to work under pressure and exhibit patience
      and precision.
    </p></div>
</div>
<div class="imgbox"> <img class="lawer-img" src="">
</div>
    <footer>
        <div class="container">
            <div>
                <h3>Address :</h3>
                <p class="address1-p">Flat 4, Building 7, 26th Street </p>
                  <p class="address2-p">  Movement Center </p>
                   <p class="address3-p">Alexandria 21511 </p> 
                   <!-- <p> Alexandria, Egypt</p> -->
            </div>
            <div>
                <h3>phone :</h3>
                <p class="phone1-p">01116822651</p>
                <p class="phone2-p">01020034977</p>
                
            </div>
        </div>
    </footer>

    <div class="create-website" id="create-website">
    <form action="{{route('subdomain.store')}}" method="post" enctype="multipart/form-data" id="createform">
        @csrf
        <input type="text" name="site_name" placeholder="Site Name" required id="nameinp">
        <input type="text" name="specialized" placeholder="Specialized" required id="specializedinp">
        <input type="text" name="experience" placeholder="Experience" required id="Experienceinp">
        <input type="text" name="about_me" placeholder="About Me" required id="aboutmeinp">
        <input type="text" name="first_address" placeholder="First Address" required id="Address1inp">
        <input type="text" name="second_address" placeholder="Second Address" id="Address2inp">
        <input type="text" name="third_address" placeholder="Third Address" id="Address3inp">
        <input type="text" name="first_phone" placeholder="First Phone" required id="phone1inp">
        <input type="text" name="second_phone" placeholder="Second Phone" id="phone2inp">
        <input type="text" name="domain" placeholder="domain" required id="domininp">
        <div class="uploadimg">
            <label for="upload">Choose your image</label>
            <input type="file" name="photo" id="upload" required>
        </div>
        <button type="submit" id="continue" onclick="showdata()">Continue</button>
    </form>
</div>


    <script src="assets/js/choose-website.js"></script>
  </body>
</html>
