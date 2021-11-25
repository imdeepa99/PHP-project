<?php
$con=mysqli_connect('localhost','root','','doctor');
	$department=$_POST['Department'];
	$doctor=$_POST['Doctor'];
	$date=$_POST['Date'];
	$time=$_POST['Time'];
	
	
	$variable="insert into booked values('$department','$doctor','$date','$time')";
	$query = mysqli_query($con,$variable);
	if($query)
	{
		echo 'value inserted succfully';
		header("Refresh:0,URL=book.php");
	}
	else{
		header("Refresh:0,URL=packed.php");
		
	}	
?>


	

















?>