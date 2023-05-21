<?php
// Replace with your actual database credentials
$host = "localhost";
$admin_id = "admin_id";
$admin_pass = "admin_pass";
$database = "admin";

// Establish database connection
$conn = new mysqli($host, $admin_id, $admin_pass, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>