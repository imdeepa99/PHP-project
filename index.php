<!DOCTYPE html>
	<html>
		<head>
		<title>home page</title>
		<script src="javascript/app.js"></script>
		<script src="javascript/patient.js"></script>
		
<link rel="stylesheet" href="css/appointment.css" type="text/css"/>
<link rel="stylesheet" href="css/foot.css" type="text/css"/>
		<link rel="stylesheet" href="fontAwesome/css/font-awesome.css" type="text/css"/>
		
		
		</head>
		<body>
		<div class="photo">	
			</div>
			<div class="appointment">
		<h1> Book Appointment</h1>
			<h2>Docter's Information</h2>
			<form name="form" action="booked.php" method="post" onsubmit="return firstfunction()">
								<div class="a">
								<label>Departments</label>
								<select name="Department">
								<option value="department of dermatology">department of dermatology</option>
								<option value="center of cancer care">center of cancer care</option>
								<option value="Department of Neuro" >Department of Neuro</option>
								<option value="department of mental health" >department of mental health</option>
								</select>
								</div>
								<span id="symbol" style= "color:red;"> </span><br />
								<div class="a">
							<label>select doctor:</label>
							<select name="Doctor" >
							<option value="Dr.Lekhmani paudel">Dr.Lekhmani paudel</option>
							<option value="Dr.Sandesh khadka">Dr.Sandesh khadka</option>
							<option value="Dr.Amrita panthi">Dr.Amrita panthi</option>
							<option value="Dr.Bikram khatiwada">Dr.Bikram khatiwada</option>
							<option value="Dr.Sachina ghimire">Dr.Sachina ghimire</option>
							<option value="Dr.Bhumika chauhan">Dr.Bhumika chauhan</option>
							<option value="Dr.Neha kharel">Dr.Neha kharel</option>
							<option value="Dr.Govinda K.c">Dr.Govinda K.c</option>
							<option value="Dr.Rushma lohala">Dr.Rushma lohala</option>
							<option value="Dr.Seema khadka">Dr.Seema khadka</option>
							</select>
						</div>
						<span id="select" style= "color:red;"> </span><br />
							<div class="a">
								<label>Appointment Date</label>
								<input type="date" name="Date">
								</div>
								<span id="data" style= "color:red;"> </span><br />
							<div class="a">								
							<label>Preferred Time</label>
							<select name="Time">
							<option value="10-12">10-12A.M</option>
							<option value="12-2">12-2P.M</option>
							<option value="2-4">2-4P.M</option>
					
							</select>
							</div>
							<span id="times" style= "color:red;"> </span><br />
						
							<input  type="submit" name="submit" value="submit" style="background:green;border-radius:15px;text-transform:uppercase;hover:red;">
							</form>
							<form  action="feedback.php" method="post" onsubmit="return firstfunction()">
							<h1 style="text-align:center;" >Feedback</h1>
							<div class="a">
							
							<label>Name:</label>
							<input type="text" name="name" placeholder="Fullname" id="use"><br />
							<span id="name" style="color:red;"> </span><br />
							</div>
							<div class="a">
							<label>Phone:</label>
							<input type="text" name="pass" placeholder="Password" id="ph"><br /><br />
							<span id="num" style="color:red;"> </span><br />
							</div>
							<div class="a">
							<label>Email:</label>
							<input type="text" name="em" placeholder="Password" id="ma"><br /><br />
							<span id="email" style="color:red;"> </span><br />
							</div>
							<div class="a">
							<label>Message:</label>
							<textarea rows="10" cols="20" id="text" name="message"></textarea><br /><br />
							<span id="area" style="color:red;"> </span><br />
							</div>
					<input type="submit" name="submit" value="submit" style="color:white;background-color:green;border-radius:30px;">		
					</div>		
			</form>
			</div>
			<div class="head">
			
			<form name="form" action="connecthome.php" method="post" onsubmit="return  myfunction()">
							<h1>Patient Details</h1>
				
								<div class="value">
				<label>username:</label>
					<input type="text" name="username" placeholder="please enter Fullname" id="user">
					<span id="name" style="color:red;"> </span><br />
				</div>
				<div class="value">
				<label>password:</label>
					<input type="password" name="password" placeholder="please enter password " id="pass">
					<span id="check" style="color:red;"> </span><br />
				</div>
				<div class="value">
				<label>address:</label>
					<input type="text" name="address" placeholder="please enter address" id="address">
					<span id="area" style="color:red;"> </span><br />
				</div>
				<div class="value">
				<label>gmail:</label>
					<input type="text" name="gmail" placeholder="please enter gmail" id="gmail">
					<span id="mail" style="color:red;"> </span><br />
					</div>
					<div class="value">
					
				<label>contact no:</label>
					<input type="text" name="contact" placeholder="please enter contact no" id="phone">
					<span id="number" style="color:red;"> </span><br />
					</div>
					<div class="value">
					<label>Age:</label>
					<input type="text" name="age" placeholder="age" id="age">
					<span id="birth" style="color:red;"> </span><br />
					</div>
					<div class="value">
					<label>Nationality:</label>
					<select name="nation">
					<option value="Nepal" >Nepal</option>
					<option value="India" >India</option>
					<option value="America" >America</option>
					<option value="China" >China</option>
					<option value="Canada" >Canada</option>
					<option value="Australia">Australia</option>
					</select>
					</div>
					<span id="bol" style= "color:red;"> </span><br />
					<br />
					<br />
					
					<label>Gender:</label>
					<input type="radio" name="radgender" value="male"/>Male
					<input type="radio" name="radgender" value="female"/>Female
					<input type="radio" name="radgender" value="other"/>Others
					<span id="message" style= "color:red;"> </span>
					<br /><br />
					<div class="button">
					<input  type="submit" name="submit" value="submit" style="background:green;border-radius:15px;text-transform:uppercase;hover:red;">
					</div>
			</form>
			</div>
			
			 <footer>
            <div class="container">
                <ul class="footer-widget clearfix">
                    <li>
                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                        <span class="caption">Baneshwor</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-paper-plane"></i></span>
                        <span class="caption">xyzhospital99@gmail.com</span>
                    </li>
					<li>
                        <span class="icon"><i class="fa fa-phone"></i></span>
                        <span class="caption">+977 145768</span>
                    </li>
					<li>
                        <span class="icon"><i class="fa fa-facebook"></i></span>
                        <span class="caption">xyzhospital</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-instagram"></i></span>
                        <span class="caption">xyzhospital</span>
                    </li>
                    
                    <li>
                        <span class="icon"></span>
                        <span class="caption">Copyright &copy; All right reserve</span>
                    </li>
                    
                </ul>
                        
            </div>
        </footer>
    </body>
		</html>
		