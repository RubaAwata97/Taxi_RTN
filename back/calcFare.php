<?php
/* AJAX */
require_once 'config.php';
// Set the content type to JSON
header('Content-Type: application/json');
// Handle HTTP methods
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET') {
    $service_type_id = $_GET['service_type'];

    $stmt = $pdo->prepare("SELECT * FROM service_types WHERE id=? LIMIT 1"); 
    $stmt->execute([$service_type_id]); 
    $service_type = $stmt->fetch();

    $fare = $service_type['fare'];

    echo json_encode($fare);
} else {
    // Invalid method
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
