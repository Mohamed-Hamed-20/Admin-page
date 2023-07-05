<html>

<head>
	<title> UK Hospital </title>

	<link href="css/style.css" type="text/css" rel="stylesheet">

</head>
<style>
	.downline
	{
		margin-bottom : 0px;
	}
</style>

<body>

	<div class="top">
		<div>
			Contact Us +91 96366 20000 / 01 | ukh@hospital.com
		</div>
	</div>

	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px;font-family:forte;">
						<font color="#428bca"> UK </font>
						<font color="#000"> Hospital</font>
					</td>
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





	<div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px">
						<font color="#000"></font> <br> <br>

						<font color="#000" size="6px">
							
		<table class="tab" border ="1">
        	<tr>

            	<th>id</th>
            	<th>Name</th>
            	<th>email</th>
            	<th>number</th>
            	<th>time work </th>
        	</tr>
    	<?php
    	include ('connect.php');
        $result = mysqli_query($conn,"SELECT *FROM doctor");
        while($row = mysqli_fetch_array($result))
        {
        ?>
        <div class = "table1" >
        <tr>

            <td><?php echo $row['id'] ; ?></td>
            <td><?php echo $row['do_name'] ; ?></td>
            <td><?php echo $row['do_email'] ; ?></td>
            <td><?php echo $row['do_number'] ; ?></td>
            <td><?php echo $row['time_work'] ; ?></td>

        </tr>

        
        </div>
        </center>
        <?php 
        }
    ?>
    </table>
						
						 </font> <br> <br><br><br><br>
					</td>
					<td style="padding-left:20px;"> </td>
					</tr>
	</table>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="nav_down">
		<div class="downline">
			&copy; UK Hospital, site designed & developed by MOSAA
		</div>
	</div>