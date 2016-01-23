<html>
<head>
</head>
<body>
<?php
$con = mysqli_connect("localhost","nikhil","nikhil");
if (!$con){
die ("cannot connect: " . mysql_error());
}

$e= "CREATE DATABASE regis";

if (mysqli_query($con,$e)){	
echo "your Database was created succesfully";
} else echo "welcome: " . mysql_error();



   

?>
</body>
</html>