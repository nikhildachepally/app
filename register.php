<html>
<head>
</head>
<body>

<?php
session_start();
include 'signup.html';
include 'database.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}


if(isset($_POST['btn-signup']))
{
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $upass =$_POST['pass'];
 mysqli_select_db($con,"regis");

$n="INSERT INTO TODO (username,email,password) VALUES ('$uname','$email','$upass')";
 $h = mysqli_query($con,$n);
 if($h)
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
</body>
</html>