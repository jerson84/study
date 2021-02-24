<?php
$servername   = "localhost";
$username = "root";
$password = "Admin@1234!@#";
$database = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
	exit();
}
//echo "Connected successfully";
?>