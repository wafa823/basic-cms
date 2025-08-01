<?php
require_once '../includes/db.php';
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (insertContact($conn, $name, $email, $message)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message!";
    }
}
?>
