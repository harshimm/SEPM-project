<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
  <head>    
    <title>LMS portal - Administrator Home</title>    
    <link rel="stylesheet" href="home.css">
  </head>
<body>

  <div id="logo">
    <div class="lleft"><img src="./inst logo.PNG"></div>
    <div class="lright"><img src="./comp logo.PNG"></div>
  </div>

  <div class="navbar">
    <a href="home_admin.php">Home</a>
    <a href="#">Update Calendar</a>
    <a href="#">Update Subject List</a>
    <a href="#">Update Time Table</a>
    <a href="#">Update Fee info</a>
    <a href="#">Pay Salary</a>
    <a href="#">Update Attendance</a>
    <a href="#">Student Result</a>
    
    <a href="logout.php" class="right">Logout</a>
    
   <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=someone@gmail.com" target="_blank" class="right">Mail Admin</a>
    <a href="./ad_circular.php" class="right">Circular</a>
    
    
  </div>

  <p id="description">Official LMS portoal of institution name </p>

</body>
</html>