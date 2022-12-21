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
<img src="../img_component/Hotel.jpeg"class="background">
<div class="Login shadow rounded text-white">
     <div class="mb-3">
     <h1 style="font-size:20px;font-weight:700;text-align: center;margin-top:10px;">Hotel Ignacio Tab</h1>
       <span style="font-size:12px;text-align: center;">Login Account for Admin</span>

     </div>
  <form action="LoginForm.php"enctype="multipart/form-data"class="form"method="post">
<input type="hidden"name="usertype" value="admin">
  <div class="mb-3">
    <label for="Username" class="form-label">Username</label>
    <input type="text" class="form-control " id="Username"name="Username" autocomplete="off" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="Username">
   
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control " id="Password"name="Password" autocomplete="off"value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>">
  </div>
<div class="mb-4 errMsg text-center">
            <span style="color:red;"> <?php
                if (isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                }
                unset($_SESSION['message']);
            ?></span>
</div>
            <div class="form-group" style="text-align:left;">
                <label><input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> Remember me </label>
            </div>

<div class="bottomForm">
    <input type="submit" class="btn btn-primary submit fw-bold w-100"name="login"value="Login"onclick="BtnCreate()">
    <p id="signUp"class="mt-3">Create New Account <a href="SignUpFormforAdmin.php">Sign Up</a></p>
</div>
</div>
  </form>
</div>
</body>
</html>