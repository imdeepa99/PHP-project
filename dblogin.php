<?php
$host='localhost';
$user='root';
$password='';
$db='dblogin';
$con=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];	
	$variable="select * from user where username='$username' and password='$password'";
	$query =mysqli_query($con,$variable);
	if(mysqli_num_rows($query)==1)
	{
		header("Refresh:0,URL=hospital.php");
	}
	else{
		header("Refresh:0,URL=Register.php");
	}
}
?>








