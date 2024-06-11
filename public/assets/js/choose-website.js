// let createwebsiteimg=document.getElementById('create-website-img')
function createwebsite(site){
location.assign(site)
}

let nameinp=document.getElementById('nameinp')
let specializedinp=document.getElementById('specializedinp')
let Experienceinp=document.getElementById('Experienceinp')
let aboutmeinp=document.getElementById('aboutmeinp')
let Address1inp=document.getElementById('Address1inp')
let Address2inp=document.getElementById('Address2inp')
let Address3inp=document.getElementById('Address3inp')
let phone1inp=document.getElementById('phone1inp')
let phone2inp=document.getElementById('phone2inp')
let continuebtn=document.getElementById('continue')
let tittleofname=document.getElementById('tittleofname')
let specialize=document.querySelector('.specialized-p')
let Experience=document.querySelector('.Experience-p')
let about=document.querySelector('.about-p')
let address1=document.querySelector('.address1-p')
let address2=document.querySelector('.address2-p')
let address3=document.querySelector('.address3-p')
let phone1=document.querySelector('.phone1-p')
let phone2=document.querySelector('.phone2-p')
let createwebsit=document.getElementById('create-website')
let upload=document.getElementById('upload')
let lawerimg=document.querySelector('.lawer-img')
let domain=document.getElementById('domain')

upload.onchange=function(){
    let file =new FileReader()
    file.readAsDataURL(upload.files[0])
file.onload=function(){
    lawerimg.src =file.result

}
}

function showdata(){
    if(nameinp.value!='' && specializedinp.value!='' &&Experienceinp.value!= '' && aboutmeinp.value!=''&&Address1inp.value!='' && phone1inp.value!='')
        {
tittleofname.innerHTML=nameinp.value
specialize.innerHTML=specializedinp.value
Experience.innerHTML=Experienceinp.value
about.innerHTML=aboutmeinp.value
address1.innerHTML=Address1inp.value
address2.innerHTML=Address2inp.value
address3.innerHTML=Address3inp.value
phone1.innerHTML=phone1inp.value
phone2.innerHTML=phone2inp.value

createwebsit.style.display='none'
domain.style.display='block'




}

}





























// let homecontent=document.getElementById('homecontent')
// let nameinp=document.getElementById('nameinp')
// let tittleofname=document.getElementById('tittleofname')
// let createform=document.getElementById('createform')
// createform.addEventListener('submit',function(){
//     e.preventDefault();
//     window.location.assign('site1.html')
// tittleofname.innerHTML=nameinp.value

// })

// continuebtn.addEventListener('click',function (){
// window.location.assign('site1.html')
// tittleofname.innerHTML=namevalue
// })