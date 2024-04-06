<?php
/* AJAX */
require_once 'config.php';
// Set the content type to JSON
header('Content-Type: application/json');
// Handle HTTP methods
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST') {
    // Create operation (add a new book)
    $name = htmlentities($_POST['name']);
    $phone = htmlentities($_POST['phone']);
    $message = htmlentities($_POST['message']);

    $stmt = $pdo->prepare('INSERT INTO messages (name, phone, message) VALUES (?, ?, ?)');
    $stmt->execute([$name, $phone,  $message]);

    echo json_encode(['message' => 'message added successfully']);
} else {
    // Invalid method
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
