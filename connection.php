<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "crud"; 

// Remove the extra closing parenthesis here ↓
$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "";
?>
