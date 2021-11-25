<!DOCTYPE html>
<html>
	<head>
		<title>login please</title>
		<script src="javascript/login.js">
		</script>
		<link rel="stylesheet" href="css/newlogin.css" type="text/css"/>		
	</head>
		<body>
		<div class="back">
			<div class="image">
				<form action="dblogin.php" method="post" onsubmit="return myfunction()">
					<h1><b>Patient Login</b><h1>
					<h2>Sign In</h1>
						<div class="header">
							<label>Username:</label>
							<input type="text" name="username" placeholder="Fullname" id="name">
							<span id="deepa" style="color:red;"> </span><br /><br />
							
							<label>Password:</label>
							<input type="password" name="password" placeholder="Password" id="pass">
							<span id="khadka" style="color:red;"> </span><br /><br />
							
							<span class="submit">
							<input type="submit" name="submit" value="login">
							</span><br /><br />
						</div>
						<p><b>Don't have account? <a href="Register.php">SignUp</a></b></p>
						</form>
						</div>
			</div>
		</body>	
</html>