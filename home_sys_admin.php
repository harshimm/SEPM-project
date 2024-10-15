<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
  <head>    
    <title>LMS portal - Sys Admin Home</title>    
    <link rel="stylesheet" href="home.css">
  </head>
<body>

  <div id="logo">
    <div class="lleft"><img src="./inst logo.PNG"></div>
    <div class="lright"><img src="./comp logo.PNG"></div>
  </div>

  <div class="navbar">
    <a href="home_sys_admin.php">Home</a>
    <a href="#">Calendar</a>
    <a href="#">Add User</a>
    <a href="#">Update User</a>
    <a href="#">Delete User</a>
       
    
    <a href="logout.php" class="right">Logout</a>
    <a href="./sys_ad_circular.php" class="right">Circular</a>
     
  </div>

  <p id="description">Official LMS portoal of institution name </p>

</body>
</html>