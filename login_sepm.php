<?php
include("connect.php");
session_start();

if($_SESSION)
{
  $myemail = mysqli_real_escape_string($db,$_SESSION['login_user']);
    
   $sql = "SELECT * FROM credentials WHERE email = '$myemail' ";
   $result = mysqli_query($db,$sql) or die(mysqli_error($db));   
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   // If result matched $myusername and $mypassword, table row must be 1 row
   if($count == 1) {

     if($row['type']=='student')
      {header("location: home_student.php");}

      elseif($row['type']=='faculty')
      {header("location: home_faculty.php");}

      elseif($row['type']=='admin')
      {header("location: home_admin.php") ;}

      elseif($row['type']=='sysadmin')
      {header("location: home_sys_admin.php");}
   }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

   // username and password sent from form 
   $myemail = mysqli_real_escape_string($db,$_POST['Email']);
   $mypassword = mysqli_real_escape_string($db,$_POST['Pass']); 
   $sql = "SELECT * FROM credentials WHERE email = '$myemail' and password = '$mypassword'";
   $result = mysqli_query($db,$sql) or die(mysqli_error($db));   
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   // If result matched $myusername and $mypassword, table row must be 1 row
   if($count == 1) {

     $_SESSION['login_user'] = $myemail;
      //$_SESSION['login_user'] = true;

     if($row['type']=='student')
      {header("location: home_student.php");}

      elseif($row['type']=='faculty')
      {header("location: home_faculty.php");}

      elseif($row['type']=='admin')
      {header("location: home_admin.php") ;}

      elseif($row['type']=='sysadmin')
      {header("location: home_sys_admin.php");}
   }
     else {
      $error = "Your Login Name or Password is invalid";
   }

}?>

<!DOCTYPE html>
<html>
  <head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type=text/css href="login styles.css">   
  </head>
<body>
  <div id="logo"> 
    <div class="lleft"><img src="./inst logo.PNG"></div>
    <div class="lright"><img src="./comp logo.PNG"></div>
    
  </div>
        <h2>LMS Portal</h2>  
    <div class="login">  
   
      <h2 id=Userlogin>User Login</h2>  
    <form id="login" method="post">  
        <label><b>Email   ID</b></label> 
        <input type="text" name="Email" id="Email">    
        <br><br>    
        <label><b>Password</b></label>    
        <input type="Password" name="Pass" id="Pass">    
        <br><br>  
        <input type="submit" name="submit" id="log" value="Login">
        <br><br>    
        <a href= "./getemail.php" target="_blank">Forgot Password</a>    
    </form> 
    
</div>  
</body>
</html>