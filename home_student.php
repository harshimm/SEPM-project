<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
  <head>    
    <title>LMS portal - Student Home</title>    
    <link rel="stylesheet" href="home.css">
  </head>
 
<body>

  <div id="logo">
    <div class="lleft"><img src="./inst logo.PNG"></div>
    <div class="lright"><img src="./comp logo.PNG"></div>
  </div>

  <div class="navbar">
    <a href="home_student.php">Home</a>
    <a href="#">Calendar</a>
    <a href="#">Subject List</a>
    <a href="#">Time Table</a>
    <a href="#">Attendance</a>
    <a href="#">Marks</a>
    <a href="#">Fee dues</a>
    <a href="#">Result</a>
    
    
    <a href="logout.php" class="right">Logout</a>
    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=someone@gmail.com" target="_blank" class="right">Mail Admin</a>
    <a href="#" class="right">Notifications</a>
    <a href="stu_circular.php" class="right">Circular</a>
    
    
  </div>

  <p id="description">Official LMS portoal of institution name </p>

</body>
</html>