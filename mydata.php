 <html>
<head>
<b><h1><center>TO DO </center></b><b>welcome to my site</b><h1>
<style>
	table
{
 border:solid #dcdcdc 1px;
 padding:25px;
 box-shadow: 0px 0px 1px rgba(0,0,0,0.2);
}
table tr,td
{
 padding:15px;
 border:solid #e1e1e1 1px;
}

input{
  width: 250px;
  height: 60px;
  border-radius: 10px;
  margin: 5px 0px 5px 0px;
}


div {
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0; 
}
body{

	background: url(engineering.jpg) fixed center center
}

</style>
<h2><p align="right"><a href="logout.php?logout">log Out</a></p><h2>
</head>
 

<body bgcolor="skyblue">
<center>
<div style="width:300px;height:400px;">
<p style="text-align:center">
<form action="mydata.php" method="POST">
<p table-align="up">
<tr>
<td>DATE:<input type="text" name="name"><br></td>
</tr>
<tr>
<td>TEXT:<input type="text" name="email"><br></td>
</tr>
</p>


<input type="reset" name="reset">
<input type="submit" name= "submit" value="todo">
        </div>

</form>

<?php

$con = mysqli_connect("localhost","nikhil","nikhil");
	if(!$con){
		die("could not connect : ". mysql_error());
	}

$f = "CREATE DATABASE nikhil";	

if (mysqli_query($con,$f)){	
echo "your Database was created succesfully";
} else echo " : " . mysql_error();

mysqli_select_db($con,"nik");


	$s = "CREATE TABLE Details (
			name varchar(20),
			email varchar(45)
			
		)";
		mysqli_query($con,$s);
		mysqli_select_db($con,"nik");
	if (isset($_POST['submit']))
	{
	$s1 = "INSERT INTO Details(name,email)
	 VALUES ('$_POST[name]','$_POST[email]')";

	mysqli_query($con,$s1);
		}


	mysqli_select_db($con,"nik");

  
 

  if(isset($_POST['delete'])){
$DeleteQuery = "DELETE FROM details WHERE name='$_POST[hidden]'";
mysqli_query($con,$DeleteQuery);
};

if(isset($_POST['add'])){
$AddQuery = "INSERT INTO details (name,email) VALUES('$_POST[name]','$_POST[email]' WHERE name='$_POST[hidden]')";
mysqli_query($DeleteQuery, $con);
};


	$s = "SELECT * FROM Details";
	$myData = mysqli_query($con,$s);
	echo "<table border=2>
	<tr>
	<th>Date</th>
	<th>Text</th>
	</tr>";
	while($record = mysqli_fetch_array($myData)){
		echo "<form action = mydata.php method=post>";
		echo "<tr>";
		echo "<td>". "<input type=text name=date value=" . $record['name'] . " </td>";
		echo "<td>" . "<input type=text name=text value=" . $record['email'] . " </td>";
		echo "<td>" . "<input type=hidden name=hidden value=" . $record['name'] .  " </td>";
		echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
		echo "</tr>";
		echo "</form>";

	} 

echo "</table>";
mysqli_close($con);

	

     
?>
</center>
<p align="right"><f1><b>Thanks for visting my site</b><f1></p>
</body>
</html>
