<?php
$servername = "localhost";
$username = "root";
$password = "prism4321";
$dbname = "funolympic";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>