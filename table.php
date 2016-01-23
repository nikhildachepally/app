<html>
<head>
</head>
<body>
<?php
$con = mysqli_connect("localhost","nikhil","nikhil");
if (!$con){
die ("cannot connect: " . mysql_error());
}
mysqli_select_db($con,"regis");


	$s = "CREATE TABLE Details (
			username varchar(20),
			email varchar(45),
			password varchar(25)
			
		)";
		mysqli_query($con,$s);
		mysqli_select_db($con,"regis");
		if (isset($_POST['submit']))
	{
	$s1 = "INSERT INTO Details(uname,email,upass)
	 VALUES ('$_POST[uname]','$_POST[email]','$_POST[upass]')";
      mysqli_query($con,$s1);
		
		}



    mysqli_close($con);
?>
</body>
</html>




