<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "hospital";

// Create connection
$conn = new mysqli($servername, $username,'',$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";

?>