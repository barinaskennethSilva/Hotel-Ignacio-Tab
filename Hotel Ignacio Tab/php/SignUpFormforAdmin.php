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
<?php include"../css/E-commerce.css"?>
</style>
    <script>
    <?php  include"../js/main.js";?>
       </script>

  <title>Hotel Ignacio Tab</title>
</head>
<body>
<!----- Sign Up Form ----------->
<img src="../img_component/Hotel.jpeg"class="background">
<div class="SignUp shadow rounded">
   <div class="mb-3">
     <h1 style="font-size:20px;font-weight:700;text-align: center;margin-top:10px;">Hotel Ignacio Tab</h1>
  <span style="font-size:12px;text-align: center;">Create New Account for Admin</span>
     </div>
 
<form action="SignForm.php"method="POST"enctype="multipart/form-data"id="SignUpform">
     <div class="form1"id="form1">
      <input type=" hidden"value="admin" name="usertype"hidden>
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" id="Name"name="Name"autocomplete="off">
  </div>
    <div class="mb-3">
    <label for="ContNum" class="form-label">Contact Number</label>

    <input class="form-control" id="ContNum"name="ContactNum"
    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "11"autocomplete="off"
 />
  </div>
      <div class="mb-3">
    <label for="Email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="Email"name="Email"autocomplete="off">
  </div>

  <button type="button"class="next btn btn-success w-100"onclick="next()">Next</button>
  </div>
  
  
  <div class="form2"id="form2">
          <div class="mb-3">
    <label for="Address" class="form-label">Permanent Address</label>
    <input type="text" class="form-control" id="Address"name="Address"autocomplete="off">
  </div>
  
    <div class="mb-3">
    <label for="Username" class="form-label">Username</label>
    <input type="text" class="form-control" id="Username"name="Username"autocomplete="off">
  </div>
  
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password"name="Password"autocomplete="off">
  </div>


<div class="btn-signUp">
    <button type="button"class="next btn btn-success w-50"onclick="back()">Back</button>
    <input type="submit" id="BtnNew" class="btn btn-primary ms-2 w-75"onclick="BtnCreate()"name="CreateAccount"value="Create New Account">
</div>
  </div>
   <p id="signUp"class="mb-4 mt-3">Login Existed Account <a href="LoginFormforAdmin.php">Login</a></p>
</form>
</div>
</body>
</html>