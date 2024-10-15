<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
  <head>    
    <title>Circulars - Student </title>    
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="circular.css">   
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
    <a href="./stu_circular.php" class="right">Circular</a>
    
    
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