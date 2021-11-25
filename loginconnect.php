<?php
$host='localhost';
$user='root';
$password='';
$db='login';
$con=mysqli_connect($host,$user,$password,$db);
if($con)
{
	echo "database connected";
}
else{
	echo "error to connect database";
}
	$name=$_POST['name'];
	$password=$_POST['pass'];	
	$variable="insert into login values('$name','$password')";
	
	$query =mysqli_query($con,$variable);
	if($query)
	{
		echo 'value inserted succfully';
	}
	else{
		
		echo 'error';
	}
	header("Refresh:0,URL=XYZ.php");
	
	
	
?>







