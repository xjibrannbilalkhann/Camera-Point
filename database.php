<?php
$host = "localhost";
$username = "root";
$password = "123";
$database="project";

// Create connection
$conn = new mysqli($host, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>