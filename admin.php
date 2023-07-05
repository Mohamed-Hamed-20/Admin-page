
<?php

include ('connect.php');
if (isset($_POST['submitmo']))
{
    $Doctor_name =$_POST['do_name'];
    $Doctor_email =$_POST['do_email'];
    $Doctor_number =$_POST['do_number'];
    $time_work =$_POST['time_work'];


    $insert_do  = "INSERT INTO doctor (do_name ,do_email, do_number, time_work )VALUES (' $Doctor_name','$Doctor_email','$Doctor_number','$time_work')";
    mysqli_query($conn,$insert_do);

    
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "css/admin.css">
    <title>admin page</title>
    <style>
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
    <div class="body1">
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
							<a href="login.php"> ADMIN</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>




    <center>
        <br><br>
            <h2>doctor table </h2>
            <table class="tab" border ="1">
        <tr>

            <th>id</th>
            <th>Name</th>
            <th>email</th>
            <th>number</th>
            <th>time work </th>
            <th>delete</th>


        </tr>
    <?php
    include ('connect.php');
        $result = mysqli_query($conn,"SELECT *FROM doctor");
        while($row = mysqli_fetch_array($result))
        {
           
        ?>
        <div class = "table1" >
        <tr >

            <td><?php echo $row['id'] ; ?></td>
            <td><?php echo $row['do_name'] ; ?></td>
            <td><?php echo $row['do_email'] ; ?></td>
            <td><?php echo $row['do_number'] ; ?></td>
            <td><?php echo $row['time_work'] ; ?></td>
            <?php
            echo "
            <td><a href='delete.php? id=$row[id]' class='btn1'>delete </a> </td>"
            ?>
            </tr>

        
        </div>
        </center>
        <?php 
        }
    ?>
    </table>
            <form class = "buttons" action="" method="post">
                <button class="btn1" name ="add" >add doctor</button>
            </form>

            <?php
            if (isset($_POST['add'])) {
                echo "<h3>hello you can add doctor </h3>";
                ?>
                <br><br>
                <form action="" method="post">
                
                <input class="min" type="text" name="do_name" placeholder="Name">
                <input class="min"type="email" name="do_email" placeholder="Email">
                <input class="min" type="number" name="do_number" placeholder ="Number" id="">
                <input class="min" type="text" name="time_work" placeholder ="Time Work"  id="">

                <input class="btn1" type="submit" name="submitmo" value="save doctor">
                </form>

            <?php
            } elseif (isset($_POST['edit'])) {
                echo "<h3>hello you in mode edit </h3>";

            }
            elseif (isset($_POST['del'])) {
                echo "<h3>hello you in mode delet</h3>";


            }
            
            
            ?>
        </div>
</body>
</html>