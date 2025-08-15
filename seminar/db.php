<?php
$servername = "localhost";
$username = "root";       // change if needed
$password = "";           // your DB password
$database = "coffee_db";  // your DB name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
