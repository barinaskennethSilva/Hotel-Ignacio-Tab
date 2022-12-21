<?php
   include('../connect_db/Connection_db.php');

?>
  <?php
if (isset($_SESSION['id']) ||(trim($_SESSION['id']) == '')) {
  //include('../php/LoginFormforAdmin.php');
 //exit();
}
$query = mysqli_query($conn,"SELECT * FROM User WHERE id = '" .$_SESSION['id']. "'");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>Hotel Ignacio Tab</title>
    <style>
    <?php include'../css/index.css';?>
    </style>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark w-100"style="position: fixed;z-index: 10;">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold text-white" href="#">Hotel Ignacio Tab</a>
    
<div class="desktop_tabs">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
   <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-Room" type="button" role="tab" aria-controls="pills-Room" aria-selected="false">Room </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Room Reservation</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Transaction</button>
  </li>
</ul>
</div>
<div class="searchForm"><form><input type="search"id="inputSearch"placeholder="Type search...."/><button type="submit"class="form-icon"><i class="fa fa-search"></i></button></form></div>
<button type="button" class="searchIcon"onclick="opensearch()"id="searchIcon1"><i class="fa fa-search"></i></button>
<button type="button" class="searchIcon1"onclick="closeSearch()"id="searchIcon"><i class="fa fa-close"id="searchIcon2"></i></button>
    <div class="profile"><a href="../screen/profile.php">
<img src="../filename/Hotel.jpeg"/>
</a>
    </div>

    <label class="user_name"><?php echo $row['Name']?></label>
  <div class="dropdown">
  <button class="dropbtn"><i class="fas fa-caret-down "></i></button>
  <div class="dropdown-content">
    <a href="#">Link Gmail</a>
    <a href="#">Notification</a>
    <a href="../php/logoutAcc.php">Logout Account</a>
  </div>
</div>

   <button id="barsIcon" onclick="OpenDash()">
  <i class="fa fa-bars"></i> 
 </button>
</div>

    </div>
    </nav>
    <!--- for dashboard mobile view-->
<div class="dashboard"id="dashboard">
  <div class="topDash">
  <div class=" profpic">
<img src="../filename/Hotel.jpeg"/>
    </div>
    <label class="user_nameDash"><?php echo $row['Name']?></label>
  </div>
  <div class="dashMenu">
<ul class="nav nav-pills dash-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active mylink" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-home"></i>Home</button>
  </li>
   <li class="nav-item" role="presentation">
    <button class="nav-link mylink" id="pills-Room-tab" data-bs-toggle="pill" data-bs-target="#pills-Room" type="button" role="tab" aria-controls="pills-Room" aria-selected="false"><i class="fa fa-bed"></i>Room </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link mylink" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-calendar-o"></i>Room Reservation</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link mylink" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-list"></i>Transaction</button>
  </li>
</ul>
  </div>
  <div class="logout">
    <a href="../php/logoutAcc.php"> <i class="fa fa-sign-out"></i> <span>Logout</span></a>
  </div>
</div>
<div class="dashclose"id="dashoff"onclick="CloseDash()"></div>


    <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
  <!-- images swiper -->
     <div class="slider">      
<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
         <img src="../filename/Hotel.jpeg" alt="slide1" />
       <div class="img-info">
         <label >Sales Promo</label>
         <div class="info-text">
         <label class="addsText1">BOOK NOW FOR</label><br>
         <label style="color:#111;">25% OFF</label>
         <p class="addsText2">The high class hotel that suit for your vacation. Book now to get 25% off and enjoy Holiday</p> 
         <label class="addsText3">for more info<br><p>phone: 09876543211</p></label>
       </div>
       </div>
      </div>
    <div class="swiper-slide">
  <img src="../filename/Hotel.jpeg" alt="slide2" />
       <div class="img-info">
         <label >Hotel Ignacio Tab</label>
         <div class="info-text">
         <label class="addsText1">Reserved Now
         </label><br>
         <label style="color:#111;">25% OFF</label>
         <p class="addsText2">Gala with amega and amego come with us to experience our services as a biggest ala 5 star hotel</p> 
         <label class="addsText3"style="position: relative;right:110px;bottom:5px;">social media<br><p><a href="#"class="fa fa-facebook"><span style="margin-left:18px;">HotelIgnacio@mytab</span></a></p></label>
       </div>
       </div>
      </div>
    <div class="swiper-slide">
        <img src="../filename/swimming_pool.jpeg" alt="slide3" />
      </div>
   </div>
  <div class="swiper-pagination shadow"></div>
  <div class="swiper-button-prev btn-next"></div>
  <div class="swiper-button-next btn-next"></div>
  </div>
</div>

</div>
  <div class="tab-pane fade"id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="adds_Container">
      <div class="form-reservation">
        <center>
        <label style="font-size: 25px;font-weight:700;color: #fff;">Hotel Ignacio Tab</label>
      </center>
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="nameText" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="nameText">
  </div>
  <div class="mb-3">
    <label for="nameText" class="form-label">Date of Arrival</label>
    <input type="date" class="form-control" id="nameText">
  </div>
  <div class="mb-3">
    <label for="nameText" class="form-label">Room</label>
    <input type="text" class="form-control" id="nameText">
  </div>
  
  <div class="btn-form d-flex"style="margin-top: 55px;">
  <button type="submit" style="height: 50px;width:50%;border:2px solid grey;background-color: transparent;color: #fff;border-radius: 5px;">Confirm Reservation</button>

  <button type="button" style="height: 50px;width:50%;border:2px solid grey;background-color: transparent;color: #fff;border-radius: 5px;margin-left: 10px;">Cancel Reservation</button>
</div>
</form>
</div>
<div class="video_adds">
<video controls>
  <source src="../filename/vipAdds.mp4" type="video/mp4">
</video>
</div>
</div>
    </div>
    <div class="tab-pane fade" id="pills-Room" role="tabpanel" aria-labelledby="pills-Room-tab">
  


<div class="w-100 bg-primary p-2 text-white fw-bold cour-descript">
  Room Reservation

</div>
<div class="coursel d-flex">
  <?php

$sql = "SELECT * FROM `Room_record`";
$result = mysqli_query($conn,$sql);
if ($result) {
while($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
$Room_Num = $row['Room_Num'];
$Room_img = $row['Room_img'];
$Rent_Price = $row['Rent_Price'];
$Room_Details = $row['Room_Details'];

      ?>
<?php echo"
<div class='room_Details shadow'>
<img src='../screen/img_component/$Room_img'style='height: 320px;width:250px;'>
<div class='room_des'>
  <label class='room_num'> $Room_Num</label>
  <p class='descript'>$Room_Details</p>
  <span class='room-price'>&#8369; $Rent_Price</span>
  <button class='btn btn-primary p-2 btn-room'>Book Now</button>
</div>
</div>";?>


<?php }}?>

</div>


    </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
<?php include'../js/index.js'?>
</script>
<script type="text/javascript"src="../js/index.js"></script>

</body>
</html>