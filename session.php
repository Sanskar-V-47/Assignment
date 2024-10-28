<?php

error_reporting(0);
   include('config.php');

   session_start();
   
   $user_check = $_SESSION['login_useremail'];
   
   $ses_sql = mysqli_query($con,"select * from user where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session1 = $row['email'];

   $login_sessio2 = $row['userid'];
   
   if(!isset($_SESSION['login_useremail'])){
   
      header("location:../index.php");
      die();
   

   }
  
?>

