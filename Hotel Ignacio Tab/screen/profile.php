<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
<?php include"../css/E-commerce.css";?>
</style>
  <link rel="stylesheet" href="../css/E-commerce.css">
  <script><?php include"../js/main.js";?></script>
  <title>Hotel Ignacio Tab</title>
</head>
<body>
  <style>

.prof-details img{
width:100%;
  height: 350px;
}
.profile img{
  height: 150px;
  width: 150px;
  border-radius: 50%;
  border:4px solid #fff;
  position: absolute;
  top:270px;
  left:60px;
}
.personaL-Info{
position: absolute;
  top:350px;
  left:280px;
  height: 402px;
  width: 83%;
  background-color: #e0e0e0ff;
  padding-left: 20px;
}
.name_user{
  font-size: 40px;
  font-weight: 600;
}
.email_info{
font-size: 18px;
position: relative;
right:300px;
top:19px;
}
.email_info i{
font-size: 28px;
position: relative;
top:5px;

}
.personal-info2{
  width:100%;
  height: 130px;
  padding: 20px;
  background-color: #fff;
}
.btn-req{
  width:120px;
  float: right;
  margin: 20px;
}
.menu-btn{
  with:200px;
  height: 200px;
  margin-top: 5px;
}
.menu-btn button{
  height: 100px;
  width: 100px;
  cursor: pointer;
  background-color: #fff;
  border: none !important;
}
.menu-btn button i{
  font-size: 30px;
}
.menu-btn button:hover{
background-color: transparent;
}
.nof-info{
  position: absolute;
  right:0px;
  bottom: 0px;
  height: 270px;
  width:200px;
  background-color: #fff;
  text-align: center;
  font-weight: 600;
  font-size: 18px;
}
  </style>
  <div class="prof-details">
<img src="../screen/img_component/hotel.jpg">
<div class="profile">
<img src="../img_component/Hotel.jpeg"class="background">
  </div>
</div>
<div class="personaL-Info">
  <div class="personal-info2">
<label class="name_user">Kenneth Barinas</label>
<span class="email_info"><i class='fa fa-user me-3'></i>kennethbarinas@gmail.com</span>
<button class="btn btn-primary text-center btn-req">Request</button>
</div>
<div class="menu-btn">
  <button type="button"class='edit-prof'><i class="fa fa-user"></i><br>Edit Profile</button>
<button type="button"class='edit-prof'><i class="fa fa-edit"></i><br>Personal Info</button>
<button type="button"class='edit-prof'><i class="fa fa-bookmark"></i><br>Favorates</button>
<button type="button"class='edit-prof'><i class="fa fa-list"></i><br>Transaction</button>
</div>
<div class="nof-info">
  <label> Notification</label>
  </div>
</body>
</html>