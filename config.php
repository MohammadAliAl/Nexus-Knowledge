<?php
// config.php - Database configuration file

$servername = "localhost";  // XAMPP default is localhost
$username = "root";         // Default XAMPP username
$password = "";             // Default XAMPP password is empty
$dbname = "users_db";       // The name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}

?>
