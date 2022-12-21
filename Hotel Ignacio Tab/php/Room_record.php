<?php
 session_start();
   include('../connect_db/Connection_db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
if (isset($_POST['uploadRoom'])) {
	       
        $Room_Num = $_POST['Room_Num'];
        $Rent_Price = $_POST['Rent_Price'];
        $Room_Details = $_POST['Room_Details'];

        $Room_images = $_FILES['file_upload']['name'];
        $tempname = $_FILES['file_upload']['tmp_name'];
        $folder ="../screen/img_component/" . $Room_images;

        $sql = "INSERT INTO Room_record(Room_img,Room_Num,Rent_Price,Room_Details) VALUES('$Room_images','$Room_Num','$Rent_Price','$Room_Details')";
        if (mysqli_query($conn, $sql)) {
        	if (move_uploaded_file($tempname, $folder)) {
        		include('../screen/Admin.php');
        		exit(0);
        	}
        }
}
}
?>