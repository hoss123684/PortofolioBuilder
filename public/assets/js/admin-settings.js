let accountsettings = document.getElementById("accountsettings");
function usersettings() {
  accountsettings.classList.toggle("hide");
}
let container=document.getElementById('container')

let deletelabel=document.getElementById('deletelabel1')
function deleteaccountbtn1(){
deletelabel.style.display='block'
container.style.opacity='0.5'
}
function deleteaccountbtn2(){
deletelabel.style.display='none'
container.style.opacity='1'

}
let editlabel=document.getElementById('editlabel')
function editaccount(){
editlabel.style.display='block'
container.style.opacity='0.5'

}
function saveaccount(){
editlabel.style.display='none'
container.style.opacity='1'

}

