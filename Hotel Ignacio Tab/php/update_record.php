<?php
  session_start();
   include('../connect_db/Connection_db.php');
if(isset($_POST['updateRecord']))
{
      $id = mysqli_real_escape_string($conn,$_GET['id']);

  //$room_id = $_POST['room_id'];
$Room_Num = $_POST['Room_Num'];
$Rent_Price = $_POST['Rent_Price'];
$Room_Details = $_POST['Room_Details'];


if (empty($Rent_Price) && empty($Room_Details)) {
$sql = "UPDATE Room_record SET Room_Num='$Room_Num' WHERE id='$id' ";
}else if (empty($Room_Num) && empty($Room_Details)) {
 $sql = "UPDATE Room_record SET Rent_Price='$Rent_Price' WHERE id='".$_SESSION['id']."' ";
}elseif (empty($Room_Num) && empty($Rent_Price)) {
 $sql = "UPDATE Room_record SET Room_Details='$Room_Details' WHERE id='".$_SESSION['id']."' ";
}else{
$sql = "UPDATE Room_record SET Room_Num='$Room_Num', Rent_Price='$Rent_Price', Room_Details='$Room_Details' WHERE id='".$_SESSION['id']."' ";
}


if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record updated successfully')</script>";
  include'../screen/Admin.php';
} else {
  echo "<script>alert('Error updating record:')</script> " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>