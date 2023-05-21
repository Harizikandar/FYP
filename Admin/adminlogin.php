<?php
session_start(); // Start the session

// Establish database connection
include('dataconnection.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve login form data
    $admin_id = $_POST["admin_id"]; // Updated the name attribute to "adminid"
    $admin_pass = $_POST["admin_password"]; // Updated the name attribute to "adminpassword"

    // Check customer from DB
    $sql = "SELECT * FROM customer
            WHERE admin_id = '$admin_id' AND admin_pass = '$admin_pass'";
    
    $result = $connection->query($sql);

    // Check if customer is available from DB
    if ($result->num_rows > 0) {
        $_SESSION["admin_id"] = $admin_id;
        echo "Login successful!";
        // Redirect to index.html
        header("Location: index.html");
        exit;
    } else {
        echo "Invalid ID or password";
    }
}

// Close database connection
$connection->close();
?>