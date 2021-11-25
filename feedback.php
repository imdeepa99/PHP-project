<?php
$con=mysqli_connect('localhost','root','','feedback');
	$name=$_POST['name'];
	$phone=$_POST['pass'];
	$email=$_POST['em'];
	$message=$_POST['message'];
	
	$variable="insert into message values('$name','$phone','$email','$message')";
	$query = mysqli_query($con,$variable);
	if($query)
	{
		echo 'THANK YOU FOE YOUR MESSAGE';
		
	}
	else{
		
		echo 'error';
	}	
?>


	

















?>