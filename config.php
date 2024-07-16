<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "library_management_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
