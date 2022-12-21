
function search_Details(){
var search_Details = document.getElementById('search-Details'); 
var container_fluid = document.getElementById('container-fluid'); 
var navbar_bottom = document.getElementById('navbar-bottom'); 
navbar_bottom.style.display = "none";
container_fluid.style.display = "none";
search_Details.style.display = "block";
}
/*-------------autoplay_Adds-------------*/
window.addEventListener('autoplay', function(){
  var adds_Video = document.getElementById('adds_Video').autoplay(); 
});
/*-------------Close_Adds----------------*/
function Close_Adds(){
  var pills_tabContent = document.getElementById('pills-tabContent'); 
  var adds = document.getElementById('adds'); 
adds.style.display="none";
pills_tabContent.style.display = "block";
}
/*-------------Open_Rent--------------*/
function Open_Rent(){
  var pills_home = document.getElementById('pills-home'); 
  var Room_Rent = document.getElementById('Room-Rent'); 
  var adds = document.getElementById('adds'); 
adds.style.display="none";
Room_Rent.style.top="0px";
Room_Rent.style.display="block";
pills_home.style.display = "none";
}
/*------------Close_Rent-----------------*/
function Close_Rent(){
  var pills_home = document.getElementById('pills-home'); 
  var Room_Details = document.getElementById('Room-Rent'); 
Room_Details.style.display="none";
pills_home.style.display = "block";
}

/*------------Close_Details--------------*/
function Close_Details(){
  var pills_home = document.getElementById('pills-home'); 
  var Room_Details = document.getElementById('Room-Details'); 
Room_Details.style.display="none";
pills_home.style.display = "block";
}
/*-------------Open_Details--------------*/
function Open_Details(){
  var pills_home = document.getElementById('pills-home'); 
  var Room_Details = document.getElementById('Room-Details'); 
Room_Details.style.display="block";
pills_home.style.display = "none";
}
 /*--------------Search----------------*/
function Opensearch(){
 var search = document.getElementById('search'); 
 var InputSearch = document.getElementById('InputSearch'); 
 var search_Details = document.getElementById('search-Details'); 
var container_fluid = document.getElementById('container-fluid'); 
var navbar_bottom = document.getElementById('navbar-bottom'); 

 if (search.style.width==="0%") {
search.style.width="80%";
 }else{
search.style.width="0%";
InputSearch.value = "";
navbar_bottom.style.display = "block";
container_fluid.style.display = "block";
search_Details.style.display = "none";
 }
}
function next(){
  var form1 = document.getElementById('form1');
  var form2 = document.getElementById('form2');
  /*-------- Input Id-------------------*/
  var Name = document.getElementById('Name');
  var ContNum = document.getElementById('ContNum');
var Email = document.getElementById('Email');
var Address = document.getElementById('Address');
  if (Name.value === "") {
    Name.placeholder = "Name required to fill..!";
  }else if( ContNum.value === ""){
ContNum.placeholder = "Contact Number required to fill..!";
  }
  else if( Email.value === ""){
Email.placeholder = "Email required to fill..!";
  }
  
  
  else{
  form2.style.display = "block";
  form1.style.display = "none";
  }
}
function back(){
  var form1 = document.getElementById('form1');
  var form2 = document.getElementById('form2');
  form2.style.display = "none";
  form1.style.display = "block";
}
function BtnCreate(){
  var Username = document.getElementById('Username');
var Password = document.getElementById('Password');
var SignUpform = document.getElementById('SignUpform');
var BtnNew = document.getElementById('BtnNew');
 if( Address.value === ""){
Address.placeholder = "Permanent Address required to fill..!";
  }
 else if( Username.value === ""){
Username.placeholder = "Username required to fill..!";
  }else if (Password.value === "") {
    Password.placeholder = "Password required to fill..!";
  }
   else{
   BtnNew.type = "submit";
    SignUpform.action="SignForm.php"
  }
}
/*--------------Open Acc----------------*/
function Acc_Info(){
 var Account_Info = document.getElementById('Account_Info'); 
 var pills_tabContent = document.getElementById('pills-tabContent'); 

 pills_tabContent.style.display = "none";
 Account_Info.style.display="block";
}
/*-----------close Acc----------------*/
function Acc_InfoClose(){
 var Account_Info = document.getElementById('Account_Info'); 
 var pills_tabContent = document.getElementById('pills-tabContent'); 
 pills_tabContent.style.display = "block";
 Account_Info.style.display="none";
}
/*-----------Change Name && Profile------*/
var viewPic = function(event){
  var UserPic1 = document.getElementsByClassName('UserPic1')[0];
  UserPic1.src = URL.createObjectURL(event.target.files[0]);
}


function ChangeName(){
  var Update = document.getElementById('Update');
  var EditName = document.getElementById('EditName');
  var edit = document.getElementById('edit');
  EditName.style.display="none";
Update.style.display="block";
edit.disabled = false;

}
/*-----------Cancel Upload---------------*/
function CancelUpload(){
 var EditProfile = document.getElementById('Edit_Profile'); 
 EditProfile.style.display="none";
}
/*-----------Open Upload----------------*/
function UploadImg(){
 var EditProfile = document.getElementById('Edit_Profile'); 
 EditProfile.style.display="block";
}
