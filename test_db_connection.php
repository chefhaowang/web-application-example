<?php
// Replace these with your MySQL database details
$servername = "127.0.0.1";  // Host (use 127.0.0.1 if you have issues with 'localhost')
$username = "root";         // Your MySQL username
$password = "root"; // Your MySQL password
$dbname = "cake";   // Your database name
$port = 3333;               // Specify the MySQL port (3333 in your case)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>