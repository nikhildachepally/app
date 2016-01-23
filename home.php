<?php
session_start();
include 'database.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
echo "user";
mysqli_select_db($con,"regis");
$k = "SELECT * FROM details WHERE username =".$_SESSION['user'];
$res=mysqli_query($con,$k);
$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>Notebook</label>
    </div>
    <div id="right">
     <div id="content">
    </div>
</div>
</body>
</html>