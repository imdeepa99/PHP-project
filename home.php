<!DOCTYPE html>
	<html>
		<head>
			<title>online appointment</title>
			<style>
.container{
	padding:15px;
	paddding-bottom:5px;
	margin:5px;
}
.container label{
	text-transform:uppercase;
	margin-bottom:4px;
	padding:2px;
	
}
.container .value input{
	width: 400px;
	padding:5px;
	padding: 15px 30px;
	border-radius: 15px;
	outline: 0;
	margin:5px;
}	
.container .value select{
	width: 400px;
	padding:5px;
	padding: 15px 30px;
	border-radius: 15px;
	outline: 0;
}	
			</style>
		</head>
		<body>
		<div class="container">
		<h1>welcome to our system</h1>
		<h1>Appointment Details</h1>
			<h2>Docter's Information</h2>
			<image src="image.jpg">
			<form action="connecthome.php" method="post">
							<div class="doctor">
								<label>Departments</label>
								<select>
								<option value="department of dermatology" name="department">department of dermatology</option>
								<option value="center of cancer care" name="department">center of cancer care</option>
								<option value="Department of Neuro" name="department">Department of Neuro</option>
								<option value="department of mental health" name="department">department of mental health</option>
								</select>
							<label>select doctor:</label>
							<select>
							<option value="Dr.Shrawan koirala" name="doctor">Dr.shrawan tripathi</option>
							<option=value="Dr.Sandesh khadka" name="doctor">Dr.sandesh khadka</option>
							<option value="Dr.Amrita panthi" name="doctor">Dr.amrita panthi</option>
							<option value="Dr.Bikram khatiwada" name="doctor">Dr.bikram khatiwada</option>
							<option value="Dr.Sachina ghimire" name="doctor">Dr.sachina ghimire</option>
							<option value="Dr.Neha kharel" name="doctor">Dr.neha kharel</option>
							</select>
						
							<br /><br /><br />
								<label>Appointment Date</label>
								<input type="date" name="date">
							</div><br />
							<label>Preferred Time</label>
							<select>
							<option value="10-12">10-12A.M</option>
							<option=value="12-2" name="doctor">12-2<option>
							<option value="2-4" name="doctor">2-4ption>
							<option value="4-6" name="doctor">4-6</option>
							<option value="6-8" name="doctor">6-8
					
							</select>
							<br /><br />
							
							
							<h1>Patient Details</h1>
				
								<div class="value">
				<label>username:</label>
					<input type="text" name="username" placeholder="please enter Fullname"><br />
				</div>
				<div class="value">
				<label>password:</label>
					<input type="password" name="password" placeholder="please enter password "><br />
				</div>
				<div class="value">
				<label>address:</label>
					<input type="text" name="address" placeholder="please enter address"><br />
				</div>
				<div class="value">
				<label>gmail:</label>
					<input type="text" name="gmail" placeholder="please enter gmail"><br />
					</div>
					<div class="value">
					
				<label>contact no:</label>
					<input type="text" name="contact" placeholder="please enter contact no"><br />
					</div>
					<div class="value">
					<label>Age:</label>
					<input type="text" name="age" placeholder="1-120"><br />
					<div class="value">
					<label>Nationality:</label>
					<select>
					<option value="Nepal" name="nation">Nepal</option>
					<option value="India" name="nation">India</option>
					<option value="America" name="nation">America</option>
					<option value="China" name="nation">China</option>
					<option value="Canada" name="nation">Canada</option>
					<option value="Australia" name="nation">Australia</option>
					</select>
					</div>
					<br />
					<br />
					</div>
					<label>Gender:</label>
					<input type="radio" name="radgender"/>Male
					<input type="radio" name="radgender"/>Female
					<input type="radio" name="radgender"/>Others
					<br /><br />
					<div class="button">
					<input  type="submit" name="submit" value="submit" style="background:green;border-radius:15px;text-transform:uppercase;hover:red;">
					</div>
			</form>
		
		</body>
	</html>