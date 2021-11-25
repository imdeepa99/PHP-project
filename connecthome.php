<?php
$host='localhost';
$user='root';
$password='';
$db='hospital';
$con=mysqli_connect($host,$user,$password,$db);
if($con)
{
	echo "database connected";
}
else{
	echo "error to connect database";
}
	$name=$_POST['username'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$mail=$_POST['gmail'];
	$contact=$_POST['contact'];
	$age=$_POST['age'];
	$nationality=$_POST['nation'];
	$gender=$_POST['radgender'];
	$variable="insert into appointment values('$name','$password','$address','$mail','$contact','$age','$nationality','$gender')";
	$query = mysqli_query($con,$variable);
	if($query)
	{
		echo 'value inserted succfully';
		header("Refresh:0,URL=index.php");
	}
	else{
		
		echo 'error';
	}	
?>