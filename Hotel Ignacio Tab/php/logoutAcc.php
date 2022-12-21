<?php
session_start();
session_destroy();
if(isset($_COOKIE["User"]) AND isset($_COOKIE["pass"])){
  setcookie("User",'',time() - (3600));
  setcookie("pass",'',time() - (3600));
}
    header('location:Login.php');
?>