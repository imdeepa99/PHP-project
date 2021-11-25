<?php
$con=mysqli_connect('localhost','root','','register');
	$name=$_POST['name'];
	$password=$_POST['pass'];
	$Cpassword=$_POST['pass'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$address=$_POST['area'];
	
	$variable="insert into pleasesignup values('$name','$password','$Cpassword','$contact','$email','$address')";
	$query = mysqli_query($con,$variable);
	if($query)
	{
		echo 'value inserted succfully';
		header("Refresh:0,URL=hospital.php");
	}
	else{
		
		echo 'error';
	}	
?>


	

















?>