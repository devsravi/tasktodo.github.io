<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="task_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
//echo "ok";

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>


