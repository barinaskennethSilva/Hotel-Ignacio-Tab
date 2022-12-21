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


<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet"href="../css/admin.css">
<script>
<?php include"./js/admin.js";?>
</script>
  <style>
  <?php include'./css/admin.css';?>
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
 <?php include"../css/admin.css";?>
 
</style>
<body>



<nav class="navbar bg-dark">
     <div class="profile">
  <img src="../filename/Hotel.jpeg">   
   </div> 
  <a href="#"class="navbar-brand fw-bold text-white ">
    <?php echo $row['Name']?></a>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"onclick="closeForm()">Home</button>
    <button class="nav-link" id="nav-Booking_Request-tab" data-bs-toggle="tab" data-bs-target="#nav-Booking_Request" type="button" role="tab" aria-controls="nav-Booking_Request" aria-selected="false">Booking Request</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"onclick="closeForm()">Notification</button>
    <button class="nav-link" id="nav-Room-tab" data-bs-toggle="tab" data-bs-target="#nav-Room" type="button" role="tab" aria-controls="nav-Room" aria-selected="false">Room</button>
  </div>

   <div class="dropdown">
  <button class="dropbtn"><i class="fas fa-caret-down "></i></button>
  <div class="dropdown-content">
    <a href="#">Link Gmail</a>
    <a href="#">Notification</a>
    <a href="../php/logoutAcc_Admin.php">Logout Account</a>
  </div>
</div>

</nav>
<div class="tab-content" id="nav-tabContent">
 <!---------- Dashboard Content ---------->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
 <!----------- Room Capacity ------------> 
<div class="container capacity py-5 ">
  <div class="row ">
<script type="text/javascript" src="../progress.js"></script>
    
    <div class="col-lg-12 mx-auto mb-5 text-white">
      <h1 class=" text-white fw-bold">Room Capacity Available</h1>
     
    </div>
    <div class="d-flex">
    <div class="col-xl-3 col-lg-6 me-2 mb-4">
      <div class=" rounded-lg p-5  percent shadow">
        <h2 class="h6 font-weight-bold text-center text-white"style="position: relative;bottom:30px;">Vacant</h2>

        <div class="progress mx-auto" data-value='80'>
          <span class="progress-left">
           <span class="progress-bar border-primary"></span>
          </span>
          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
          </span>
          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
            <div class="h2 font-weight-bold">80<sup class="small"style="position:relative;top:0px;">%</sup></div>
          </div>
        </div>
   
        <div class="row text-center "style="position:relative;bottom:32px;width:220px;right: 30px;">
          <div class="col-6 border-right">
            <div class="h5 font-weight-bold mb-0">28%</div><span class="small text-gray"style="font-size: 15px;">Last week</span>
          </div>
          <div class="col-6">
            <div class="h5 font-weight-bold mb-0">70%</div><span class="small text-gray " style="font-size: 15px;">Last month</span>
          </div>
        </div>
      
      </div>
    </div>

    <div class="col-xl-3 col-lg-6 mb-4">
      <div class="bg-dark rounded-lg p-5 percent shadow"style = "position: relative;right: 70px;">
        <h2 class="h6 font-weight-bold text-center"style="position: relative;bottom:30px;">Occupied</h2>

        <div class="progress mx-auto" data-value='25'>
          <span class="progress-left">
                        <span class="progress-bar border-danger"></span>
          </span>
          <span class="progress-right">
                        <span class="progress-bar border-danger"></span>
          </span>
          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
            <div class="h2 font-weight-bold">25<sup class="small"style="position:relative;top:0px;">%</sup></div>
          </div>
        </div>
        <!-- END -->

        <!-- Demo info-->
        <div class="row text-center"style="position:relative;bottom:32px;width:220px;right: 30px;">
          <div class="col-6 border-right">
            <div class="h4 font-weight-bold mb-0">20%</div><span class="small text-gray"style="font-size: 15px;">Last week</span>
          </div>
          <div class="col-6">
            <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray"style="font-size: 15px;">Last month</span>
          </div>
        </div>
       
      </div>
    </div>
 </div>
</div>
</div>


    
 <!----------- calendar event ------------>
 <div class="calendar"id="calendar">
   <div class="month">
  <i class="fa fa-chevron-left prev"></i>  
 <div class="date1">
   <h1 id="month"></h1>
   <p class="text-white"id="date"></p>
 </div>
   <i class="fa fa-chevron-right next"></i>
   </div>
   <div class="weekdays">
     <div>Sun</div>
<div>Mon</div>
<div>Tue</div>
<div>Wed</div>
<div>Thu</div>
<div>Fri</div>
<div>Sat</div>
</div>
<div class="days"></div>
</div> 
 <!----------- Notification ------------>
<div class="Room_Reservation">
  <div class="reserveName">
    Notification
  </div>
  <div class="notif mt-2">
    
  </div>
</div>
 <!----------- calendar event ------------>
<div class="Request_Message">
<div class="Request_msg">
  Request Message
</div> 
<div class="send_messages">
  <input type="text"placeholder="Type a message...">
  
  <button type="button"><i class="fa fa-send"></i></button>
 <button type="button"><i class="fa fa-smile-o"></i></button>
</div>
</div>
    </div>
 <!----------- Room Capacity ------------>
  <div class="tab-pane fade" id="nav-Booking_Request" role="tabpanel" aria-labelledby="nav-Booking_Request-tab">
    <div class="search-form">
      <form>
        <input type="search"placeholder="Search Request">
</form>
    </div>
    <div class="btn-update">
  <button class="Ins_room"onclick="Insert_form()">Insert New Room</button>
<button class="Update_Room"onclick="Trans_Form()">Pay Room Booking</button>
</div>
 <table class="table table-striped">
    <tr class="bg-danger">
    <th>Room Number</th>
    <th>Customer Name</th>
    <th>Room Status</th>
    <th>Check In</th>
  <th>Date</th>
   <th>Check Out</th>
      <th>Date</th>
  <th>Actions</th>
  <th>Verified Booking</th>
    </tr>
<?php

$sql = "SELECT * FROM `Room_record`";
$result = mysqli_query($conn,$sql);
if ($result) {
while($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
$Room_Num = $row['Room_Num'];
$Name = $row['Name'];
$Room_status = $row['Room_status'];
$Check_In = $row['Check_In'];
$Date_In = $row['Date_In'];
$Check_Out = $row['Check_Out'];
$Date_Out = $row['Date_Out'];

echo " </tr> 
    <tr>
    <td>$Room_Num</td>
    <td>$Name</td>
    <td>$Room_status</td>
    <td>$Check_In</td>
    <td>$Date_In</td>
   <td>$Check_Out</td>
    <td>$Date_Out</td>
   <td><button class='Update_Room'onclick='Update_form()'>Update Record</button>
  <button class=' ms-4 btn btn-danger'><a class='text-white'href='delete.php?deleteid='" .$id."'><i class='fa fa-trash'></i></a></button></td>
  <td><button class='btn btn-warning text-white fw-bold'>Confirm Booking</button></td>
  </tr>";
}

}
?>
    </tr>
</table>   

<!------------ New Room Record ----------->
<div class="modal-alert">
<span> <?php
                if (isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                }
                unset($_SESSION['message']);
            ?></span>
  </div>
<div class="form_Ins"id="form_Ins">
<form id="InsertRoom" method="post"action="../php/Room_record.php"enctype="multipart/form-data">
  <center>
     <div class="mb-3 mt-4 h2">
    New Room Record
</div>
  </center>
<button type="button"onclick="closeForm()"class="closeBtn"><i class="fa fa-close"></i></button>
    <div class="mb-3">
    <label for="Images" class="form-label">Room Images</label>
    <input type="file" class="form-control" id="Images" accept="image/*" name="file_upload">
  </div>
  <div class="mb-3">
    <label for="Room_Num" class="form-label">Room Number</label>
    <input type="text" class="form-control" id="Room_Num" name="Room_Num">
  </div>
  <div class="mb-3">
    <label for="Rent_Price" class="form-label">Price</label>
    <input type="text" class="form-control" id="Rent_Price"name="Rent_Price">
  </div>
  <div class="mb-3 ">
   <label for="Room_Details" class="form-label">Details</label>
    <input type="text" class="form-control" id="Room_Details"name="Room_Details">
  </div>
  <button type="submit" class="btn btn-primary msg_btn"name="uploadRoom">Submit</button>
</form>
</div>
<!--------- Update Room Record ----------->
  <?php
$query = mysqli_query($conn,"SELECT * FROM Room_record WHERE id = '$id'");
while ($row = mysqli_fetch_assoc($query)) {
  
?>
<div class="form_Ins"id="Update_Record">

<form id="InsertRoom" method="post"action="../php/update_record.php"enctype="multipart/form-data">

    <center>
     <div class="mb-3 mt-4 h2">
    Update Room Record
</div>
  </center>
  <input type="text" name="id" value="<?=$row['id']?>">
  <button type="button"onclick="closeForm()"class="closeBtn"><i class="fa fa-close"></i></button>
    <!--div class="mb-3">
    <label for="Images" class="form-label">Room Images</label>
    <input type="file" class="form-control" id="Images" accept="image/*" name="file_upload">
  </div-->
  <div class="mb-3">
    <label for="Room_Num" class="form-label">Room Number</label>
    <input type="text" class="form-control" id="Room_Num" name="Room_Num"value="<?= $row['Room_Num'];?>">
  </div>
  <div class="mb-3">
    <label for="Rent_Price" class="form-label">Price</label>
    <input type="text" class="form-control" id="Rent_Price"name="Rent_Price"value="<?php echo $row['Rent_Price']?>">
  </div>
  <div class="mb-3 ">
   <label for="Room_Details" class="form-label">Details</label>
    <input type="text" class="form-control" id="Room_Details"name="Room_Details"value="<?php echo $row['Room_Details']?>">
  </div>
  <button type="submit" class="btn btn-primary msg_btn"name="updateRecord">Submit</button>

</form>

</div>
<?php
 }

?>
  </div>
 <!----------- calendar event ------------>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>

    <div class="tab-pane fade" id="nav-Room" role="tabpanel" aria-labelledby="nav-Room-tab">
      
    <div class="room-floor">
    <label>Update Room Details</label>
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

      ?> <?php
echo"<div class='room-details shadow'>
<img src='../screen/img_component/$Room_img'>
<label class='room_name'>$Room_Num</label><br>
<span class='room-det me-1 ms-1'>$Room_Details</span>
<div class='room-btn d-flex'>
<button class='btn-update'>Update Info</button>
<label>&#8369;$Rent_Price</label>
</div>
</div>";
?>


<?php }}?>

</div>

    </div>

</div>

<script src="../js/admin.js">
</script>



</body>
</html>

