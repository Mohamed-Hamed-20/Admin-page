
<?php
session_start();
include ('connect.php');
if(isset($_POST['submit']))
{
    $first_name =$_POST['firstName'];
    $last_name =$_POST['lastName'];
	$gender =$_POST['gender'];
	$date =$_POST['date'];
	$number =$_POST['number'];
    $email =$_POST['email'];




    $insert  = "INSERT INTO user (firstName ,lastName, gender, date ,number ,email )VALUES (' $first_name','$last_name','$gender','$date','$number','$email')";
     mysqli_query($conn,$insert);
     
}

?>



<html>
<head>
	<title> UK Hospital </title>
	
	<link href="css/style.css" type="text/css" rel="stylesheet">
	
</head>
<body>
	
	<div class="top">
		<div>
		 Contact Us +010 2525 7186 / 01 | mohamed@hospital.com 
		</div>
	</div>
	
	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> UK  </font><font color="#000"> Hospital</font> </td>
					<td> <br> <br>
						<font size="4px"> 
							<a href="index.php">HOME</a> 
							<a href="doctor.php">DOCTORS</a> 
							<a href="contact.html">CONTACT US</a>
							<a href="login.php">ADMIN</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<div class="middle">
		<div style="background-image:url('img/a.jpg');">
		<p>
			<br> <br>
					Health Care Services  <br>
			<font size="5px"> We Care About Your Health </font>
		</p> 
		</div>
	</div>
	
	<div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px">
						<font color="#000"> <h2>We are medical center </h2> </font> <br> <br>

					<font color="#000" size="5px"> We Are Here For You ! </font> <br> <br>

					The project Hospital Management system includes making an appointment , storing patient details and storing doctor details into the system. The software has the facility to give a unique id for every doctor and stores the details of every doctor and patient automatically.  User can search availability of a doctor in doctors table <br><br>

					Hospital Management System is powerful, flexible, and easy to use and is designed and developed to deliver real conceivable benefits to hospitals.
Hospital Management System is designed for multispeciality hospitals, to cover a wide range of hospital administration and management processes. It is an integrated end-to-end Hospital Management System that provides relevant information across the hospital to support effective    decision making for patient care, hospital administration and critical financial accounting, in a seamless flow.
Hospital Management System is a software product suite designed to improve the quality and management of hospital management in the areas of clinical process analysis and activity-based costing. Hospital Management System enables you to develop your organization and improve its effectiveness and quality of work. Managing the key processes efficiently is critical to the success of the hospital helps you manage your processes 
 <br><br>
<ul>
<li> The Hospital Management System can be entered using a username and password. It is accessible either by an administrator 
<li>Only he can add or delete data from the database.
<li>The data are well protected for personal use and makes the data processing very fast
<li>The main function of the system is store patient details and doctor details and retrieve these details
<li>The purpose of the project entitled as “HOSPITAL  MANAGEMENT SYSTEM” is to computerize
</ul>
<br>
 </td>
					
					
					<td> </td>
				</tr>
			
				
			</table>
		</div>
	</div>
	
	<div class="bottom_up">
		<div>
				Make an Appointment
				<form action="output.php" method="post">
				<table >
					<!-- ///////////////////////////////////////			 -->
					<tr>
						<td width="500px"> </td>
						<td>	<input type="text" name="firstName" placeholder="First Name">
						<td> 	<input type="text"  name="lastName" placeholder="Last Name">
					</tr>
					<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td>	<input type="email" name="email" style="width: 250px;height: 45px;" placeholder="Email"></td>
						<td> 	<input type="text" name="number" placeholder="phone "></td>
					</tr>
					
					<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td>	<select name="gender"> <option> -- Gender -- </option> <option name="gender" value ="M" > Male </option> <option name="gender" value ="F"> Female </option> </select>
						<td> 	<input type="date" name="date" style="width: 250px;height: 45px;" placeholder="appointment date">

					</tr>
					
						<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td colspan="2">	<textarea placeholder="Message"> </textarea>
					</tr>
					
						<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td colspan="2">	<button style="width: 0px; padding:0px; Cursor:pointer;outline:none; border:none;border-radius:0px;margin-bottom:0px;"><input style="width: 110px; padding:7px; Cursor:pointer;outline:none; border:none;border-radius:10px;margin-bottom:10px; margin-right 10px;; " type="submit" name="submit" value="submit"></button>
					</tr>
				</table>
			</form>
		</div>
	</div>
	
	
	
	
	
	<div class="nav_down">
		<div>
		 &copy; UK Hospital, site designed & developed by MOSAA
		</div>
	</div>
	
