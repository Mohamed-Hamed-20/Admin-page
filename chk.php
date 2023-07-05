<?php
 if ($_SERVER["REQUEST_METHOD"]==="POST") {

   if($_POST["email"]=="moh@yahoo.com"&& $_POST["pass"]=="password"){
       header("Location:admin.php");
       exit();
   }
else{
    echo "<br>";
    die("<b> Wrong email or password, Try agin");
}
 }else {
    echo "<h2>You Not Allow To See This padge</h2>";
 }
?>