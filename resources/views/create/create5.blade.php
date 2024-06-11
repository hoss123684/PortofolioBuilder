<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/site5.css" />
  </head>
  <body>
    <h1 class="tittleofname" id="tittleofname">بسام سعيد محمد</h1>
    <div class="homecontent" id="homecontent">
        <div >
    <h3>التخصص  :</h3><p class="specialized-p">أسرة , جنائي , مدني </p></div>
    <div ><h3>الخبره  :</h3><p class="Experience-p">10 سنوات</p></div>
    
    <div class="about-div"><h3 >نبذه عنى:</h3><p class="about-p">المحامون يعتبرون أحجار الزاوية في النظام القانوني، حيث يساعدون في تحقيق العدالة وضمان تطبيق القانون بشكل عادل. العمل كمحامي يتطلب مهارات تحليلية وتفكير نقدي عالية، بالإضافة إلى القدرة على العمل تحت الضغط والصبر والدقة
    </p></div>
</div>
<div class="imgbox"> <img class="lawer-img" src="">
</div>
    <footer>
        <div class="container">
            <div>
                <h3>العنوان  :</h3>
                <p class="address1-p">الشقة 4، العمارة 7، شارع 26    </p>
                  <p class="address2-p"> مركز الحركة </p>
                   <p class="address3-p"> الإسكندرية 21511 </p>
                   <!-- <p> Alexandria, Egypt</p> -->
            </div>
            <div>
                <h3>تواصل معي      :</h3>
                <p class="phone1-p">01116822651</p>
                <p class="phone2-p">01020034977</p>
                
            </div>
        </div>
    </footer>

    <div class="create-website" id="create-website">
        <form action="" id="createform">
            <input type="text" placeholder="اسم الموقع" required id="nameinp">
            <input type="text" placeholder="التخصص " required id="specializedinp">
            <input type="text" placeholder="الخبره  " required id="Experienceinp">
            <input type="text" placeholder="نبذه عنى  " required id="aboutmeinp">
            <input type="text" placeholder="العنوان  " required id="Address1inp">
            <input type="text" placeholder="العنوان  "  id="Address2inp">
            <input type="text" placeholder="العنوان  "  id="Address3inp">
            <input type="text" placeholder="الهاتف   " required id="phone1inp">
            <input type="text" placeholder="الهاتف   "  id="phone2inp">
            <input type="text" placeholder="اختصاص" required id="domininp">

            <div class="uploadimg">
            <label for="upload">اختر الصوره لخاصه بك</label>
            <input type="file" id="upload"></div>
            <button id="continue" onclick="showdata()" >استمرار</button>

        </form>

    </div>


    <script src="assets/js/choose-website.js"></script>
  </body>
</html>