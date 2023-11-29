<?php
// Database configuration
$servername = "db";
$username = "zens";
$password = "zens";
$dbname = "zens";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
