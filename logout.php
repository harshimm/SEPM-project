<?php
   session_start();
   
   if(session_destroy()) {
      header("location: login_sepm.php");
   }
?>