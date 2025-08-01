<?php
// Database connection parameters
$host = 'localhost';  // Database host
$username = 'root';  // Your database username
$password = '';  // Your database password
$dbname = 'cemas';  // Your database name

try {
    // Create connection using PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";

    // Example query
    $sql = "SELECT * FROM your_table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output results
    foreach ($results as $row) {
        echo "id: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
