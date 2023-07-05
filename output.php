
<?php
include ('connect.php');
if(isset($_POST['submit'])){

    $first_name =$_POST['firstName'];
    $last_name =$_POST['lastName'];
    $date =$_POST['date'];
    $email =$_POST['email'];
}
$time = 0;
$time ++;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>your appointment done</title>
    <style>.name_user
{
	color: red;
	font-weight: bold;
    display: inline;

}
.sty_user{

	font-size:larger;
	font-weight: bolder;
	
	
}
.body1 { 
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background: linear-gradient(120deg,#a2d0ef,#9f88a8);
    height: 100vh;
    overflow: hidden;

    *{
	margin:auto;
	padding:auto;
    } 

    }
    .heloo{
        color: -webkit-link;
        cursor: pointer;
        text-decoration: underline;
    }
</style>
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

    <div class="body1">
    <br><br>
    <center>
    <h2>Hello <div class = "name_user"><?php echo  " ".$first_name." ";
                    echo $last_name; ?></div></h2>
                    <br><br><br>
                   <div class="sty_user"> <p>You now have an appointment :  <?php echo " ".$date ?>
                    <br><br>
                    <p>Email : <?php echo $email ; ?></p>
                    <br><br>
                    <p>Time : <?php echo " ".$time." " ?>pm</p> </div>
                    </center>
                    </div>
</body>
</html>
