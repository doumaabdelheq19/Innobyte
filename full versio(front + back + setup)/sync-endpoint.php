<?php
// sync-endpoint.php

// Simulate a database connection (replace this with your actual database connection)
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'your_database';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $e->getMessage()]);
    exit;
}

// Retrieve data from the request
$requestData = json_decode(file_get_contents('php://input'), true);

// Process and store the data in the database (replace this with your actual data processing logic)
try {
    // For demonstration purposes, let's assume we have a "tasks" table
    $stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
    $stmt->bindParam(':title', $requestData['title']);
    $stmt->bindParam(':description', $requestData['description']);
    $stmt->execute();

    echo json_encode(['status' => 'success', 'message' => 'Data synced successfully']);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
}