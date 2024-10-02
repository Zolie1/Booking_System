<?php
// Database configuration
$host = "localhost";  
$user = "root";       
$password = "";       
$database = "jojo_db";  

// Create a new MySQLi connection
$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
