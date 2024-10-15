<?php
include("connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

   // username and password sent from form 
   $myemail = mysqli_real_escape_string($db,$_POST['Email']);
   //$mypassword = mysqli_real_escape_string($db,$_POST['Pass']); 
   $sql = "SELECT * FROM credentials WHERE email = '$myemail'";
   $result = mysqli_query($db,$sql) or die(mysqli_error($db));   
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   // If result matched $myusername and $mypassword, table row must be 1 row
   if($count == 1) {

     header("location: https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=adm@gmail.com");
   }
     else {
      $error = "Your Login Name or Password is invalid";
   }

}
?>

<!DOCTYPE html>
<html>
  <head>    
    <title>LMS Email Verification</title>    
    <link rel="stylesheet" type=text/css href="getemail.css">   
  </head>
<body>
  <div id="logo"> 
    
    
  </div> 
    <div class="reset">  
   
      <h2 id=Userlogin>We would send the link for password reset to your account email</h2>  
    <form id="reset password" method="post">  
        <label><b>Email   ID</b></label> 
        <br>
        <input type="text" name="Email" id="Email">    
        <br><br>    
        
        <input type="submit" name="submit" id="submit" value="Submit">
        <br><br>       
    </form> 
    
</div> 
 
</body>
</html>