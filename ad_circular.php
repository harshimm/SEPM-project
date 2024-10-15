<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
  <head>    
    <title>Circular - Administrator</title>    
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="circular.css"> 
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

  <div class="Circular">

    <script src="./circular.js"></script> 

  <h2 id="cir">Circulars</h2>

  <p id="cir_no">
    <script >
      document.write(cn);
    </script>
  </p>

  <p id="date">
    <script >
      document.write(d);
    </script>
  </p>

<p id="salutation">
  <script >
    document.write(ns);
  </script>
</p>
<p id="content">
  <script >
    document.write(nco);
  </script>
</p>

<p id="by">
  <script>
    document.write(wb);
  </script>
</p>

<p id="des">
  <script>
    document.write(des);
  </script>
</p>

<p id="closure">
  <script>
    document.write(ncl);
  </script>
</p>
<br><br>
</div>

</body>
</html>