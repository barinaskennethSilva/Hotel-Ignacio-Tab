<?php
session_start();
include('../connect_db/Connection_db.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
if (isset($_POST['CreateAccount'])) {
    $usertype = $_POST['usertype'];
$Name = $_POST['Name'];
$ContactNum = $_POST['ContactNum'];
$Address = $_POST['Address'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
 $sql = "INSERT INTO User (usertype,Name,ContactNum,Address,Username,Password,Email) VALUES ('$usertype','$Name','$ContactNum','$Address','$Username','$Password','$Email')";
 
if(mysqli_query($conn, $sql))
    {
        if ($usertype == "admin") {
           include('../screen/Admin.php');
        }
        elseif ($usertype == "user") {
      include('../screen/Mainform.php');
        }
    }
}
}
?>