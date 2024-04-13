<?php
// Include the PostgreSQL connection file
include('connection.php');

// Retrieve form data
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
$email = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];

// Insert user into the database
$query = "INSERT INTO customers (username, password, email, phone, name) 
          VALUES ('$username', '$password', '$email', '$phone', '$name')";
$result = pg_query($conn, $query);

if ($result) {
    echo "Registration successful.";
} else {
    echo "Error: " . pg_last_error($conn);
}

// Close the connection
pg_close($conn);
?>
