<?php
// Fetch projects
function fetchProjects($conn) {
    $sql = "SELECT * FROM projects ORDER BY created_at DESC";
    return $conn->query($sql);
}

// Insert comment
function insertComment($conn, $project_id, $user_name, $comment) {
    $sql = "INSERT INTO comments (project_id, user_name, comment) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('iss', $project_id, $user_name, $comment);
    return $stmt->execute();
}

// Insert contact message
function insertContact($conn, $name, $email, $message) {
    $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $name, $email, $message);
    return $stmt->execute();
}
?>
