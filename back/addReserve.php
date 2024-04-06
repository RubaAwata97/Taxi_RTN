<?php
/* AJAX */
require_once 'config.php';
// Set the content type to JSON
header('Content-Type: application/json');
// Handle HTTP methods
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST') {
    // Create operation (add a new book)
    $service_type = htmlentities($_POST['service_type']);
    $start_location = htmlentities($_POST['start_location']);
    $end_location = htmlentities($_POST['end_location']);
    $user_name = htmlentities($_POST['user_name']);
    $user_phone = htmlentities($_POST['user_phone']);
    $user_email = htmlentities($_POST['user_email']);
    $user_notes = htmlentities($_POST['user_notes']);

    //check if user exist
    $stmt = $pdo->prepare("SELECT * FROM users WHERE name=? & phone=? & email=? LIMIT 1"); 
    $stmt->execute([$user_name, $user_phone, $user_email]); 
    $user = $stmt->fetch();
    if(!$user) {
        $stmt = $pdo->prepare('INSERT INTO users (name, phone, email) VALUES (?, ?, ?)');
        $stmt->execute([$user_name, $user_phone, $user_email]);
        $user_id = $pdo->lastInsertId();
    } else {
        $user_id = $user['id'];
    }

    $stmt = $pdo->prepare('INSERT INTO bookings (location_a, location_b, notes, user_id, service_type_id, status) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$start_location, $end_location, $user_notes, $user_id, $service_type, 'pending']);

    echo json_encode(['message' => 'Booking added successfully']);
} else {
    // Invalid method
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
