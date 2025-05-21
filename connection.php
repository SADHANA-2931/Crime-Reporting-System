<?php 
$servername = "localhost";
$username = "root";
$password = ""; // Adjust this according to your database password
$db_name = "d1";  

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>