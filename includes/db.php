<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'cemas';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
