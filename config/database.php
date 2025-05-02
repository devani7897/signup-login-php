<?php
// Database configuration
$host = 'localhost';
$db_name = 'phpsignup'; 
$username = 'root';
$password = '';

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $db_name);
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>