<!DOCTYPE html>
	<html>
		<head>
			<title> register</title>
				<script src="javascript/register.js">
				</script>
				<link rel="stylesheet" href="css/register.css" type="text/css"/>
		</head>
			<body>
				<h1>SignUp</h1>
				<div class="form">
				<fieldset>
				<legend value="sign"></legend>
					<form action="signup.php" method="post" onsubmit="return myfunction()">
					<div class="signup">
							<label>Username:</label>
							<input type="text" name="name" placeholder="Fullname" id="user">
							<span id="name" style="color:red;"> </span><br />
							<label>Password:</label>
							<input type="password" name="pass" placeholder="Password" id="pass1">
									<span id="check" style="color:red;"> </span><br />
							<label>Confirm password:</label>
							<input type="password" name="pass" placeholder="Confirm password" id="pass2">
							<span id="check" style="color:red;"> </span><br />
							<label>Contact No:</label>
							<input type="text" name="contact" placeholder="Contact no" id="phone">
							<span id="number" style="color:red;"> </span><br />
							<label>Email:</label>
							<input type="text" name="email" placeholder="Email address" id="mail">
							<span id="email" style="color:red;"> </span><br />
							<label>Address:</label>
							<input type="text" name="area" placeholder="address" id="address">
							<span id="location" style="color:red;"> </span><br />
						</div>
						<div class="submit">
							<input type="submit" name="submit" value="sign up">
							
						</div>
					</form>
					</fieldset>
					</div>
			</body> 
	</html> 