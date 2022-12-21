<?php
    if(isset($_POST['login'])){
         
        session_start();
   include('../connect_db/Connection_db.php');
         $usertype=$_POST['usertype'];
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];
     
        $query=mysqli_query($conn,"select * from User where usertype ='$usertype' && Username='$Username' && Password='$Password'");
        $row=mysqli_fetch_array($query);
        if (isset($_POST['remember'])) {
           setcookie("user",$row['Username'],time() + (86400 * 30));
           setcookie('pass',$row['Password'],time() + (86400 * 30));
        }
           $_SESSION['id'] =$row['id'];
         

             # UNDER MAINTAINACE DONT DISTURB 
        if ( $usertype == 'user' && empty($Username) && empty($Password)) {
                 $_SESSION['message']="Username and Password are Required!";
                 include('Login.php');
          
             }
              elseif ( $usertype == 'user' && empty($Username)) {
                 $_SESSION['message']="Username are Required!";
                 include('Login.php');
          
             }
               elseif ( $usertype == 'user' && empty($Password)) {
                 $_SESSION['message']="Password are Required!";
                 include('Login.php');
          
             }
             elseif( $usertype == 'user' && $row == 0){
              $_SESSION['message']="Username or Password are Incorret!";
             include('Login.php');

         }
        
          elseif ($row['usertype'] == 'user' && $row['Username'] == $Username && $row['Password'] == $Password ) {
             include('../screen/Mainform.php');
             exit();
        }

        //for Admin User Validation
          if ( $usertype == 'admin' && empty($Username) && empty($Password)) {
                 $_SESSION['message']="Username and Password are Required!";
                 include('LoginFormforAdmin.php');
          
             }
              elseif ( $usertype == 'admin' && empty($Username)) {
                 $_SESSION['message']="Username are Required!";
                 include('LoginFormforAdmin.php');
          
             }
               elseif ( $usertype == 'admin' && empty($Password)) {
                 $_SESSION['message']="Password are Required!";
                 include('LoginFormforAdmin.php');
          
             }
           elseif( $usertype == 'admin' && $row == 0){
              $_SESSION['message']="Username or Password are Incorret!";
                            include('LoginFormforAdmin.php');

         }
        
          elseif ($row['usertype'] == 'admin' && $row['Username'] == $Username && $row['Password'] == $Password ) {
             include('../screen/admin.php');
             exit();
        }
       
        }
    
    
?>