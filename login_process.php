<?php
// Start the session
session_start();

// Include the PostgreSQL connection file
include('connection.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user exists in the database
    $query = "SELECT * FROM customers WHERE username='$username'";
    $result = pg_query($conn, $query);
    $row = pg_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        // Store user details in session
        $_SESSION['customerName'] = $row['username'];
        $_SESSION['customerEmail'] = $row['email']; // Assuming email is stored in the database

        // Redirect to the menu page after successful login
        header("Location: menu.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    // Close the connection
    pg_close($conn);
}
?>