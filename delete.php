<?php

include('connect.php');
 $id=$_GET['id'];
 mysqli_query($conn,"DELETE FROM doctor where id=$id");

 header("Location:admin.php");

?>