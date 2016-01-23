<?php
session_start();

include 'database.php';


if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $email = $_POST['email'];
 $upass = $_POST['pass'];

 mysqli_select_db($con,"regis");

 $v = "SELECT * FROM TODO WHERE email='$email' && password= '$upass'";


 $res = mysqli_query($con,$v);
 $row = mysqli_fetch_assoc($res);
 print_r($row);
 
 echo "<br>";

 if($row['email']==$email && $row['password']==$upass)
 
 {
 
  header("Location: mydata.php");
 }
else  echo "wrong details";
}




 
?>
<!DOCTYPE html>
<html>
<head>
<title>Notebook - Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
	body{

background: url(grafity.jpg) fixed center center 

	}

</style>


</head>
<body>
<center>
<div id="login-form">
<form method="post" action="index.php" >
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your email" id="email" onkeyup="checkemail()" /></td>
<span><p id="p1"></p></span>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" id="security" onkeyup="checkpassword()" /></td>
<span><p id="p2"></p></span>
</tr>
<tr>
<td><button type="submit" name="btn-login">Log In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
<script src = "login.js">
</script>
</body>
</html>
