<?php
$host = 'localhost';
$db = 'student_db';
$user = 'your_username'; // replace with your username
$password = 'your_password'; // replace with your password

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully';
?>