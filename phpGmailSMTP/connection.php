<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="waste_3";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>