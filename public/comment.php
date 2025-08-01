<?php
require_once '../includes/db.php';
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $project_id = $_POST['project_id'];
    $user_name = $_POST['user_name'];
    $comment = $_POST['comment'];

    if (insertComment($conn, $project_id, $user_name, $comment)) {
        echo "Comment submitted successfully!";
    } else {
        echo "Failed to submit comment!";
    }
}
?>
