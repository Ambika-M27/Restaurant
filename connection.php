<?php
// PostgreSQL database connection parameters
$host = "localhost";
$port = "5432";
$dbname = "restaurant";
$user = "postgres";
$password = "0328";

// Connect to PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Error: Unable to connect to the database.";
    exit;
}
?>
