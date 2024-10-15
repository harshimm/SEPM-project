<?php
   include('connect.php');
   session_start();

   if(!($_SESSION['login_user'])){
      header("location: login_sepm.php");
      die();
   }
?>