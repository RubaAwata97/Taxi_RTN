<?php
/* AJAX */
require_once 'config.php';
// Set the content type to JSON
header('Content-Type: application/json');
// Handle HTTP methods
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    $service_type_id = $_GET['service_type'];
    $location_a = $_GET['location_a'];
    $location_b = $_GET['location_b'];

    $stmt = $pdo->prepare("SELECT * FROM service_types WHERE id=? LIMIT 1");
    $stmt->execute([$service_type_id]);
    $service_type = $stmt->fetch();

    $fare = $service_type['fare'];

    $url = "https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyDHp-xRducq7qOCb8hSHvN6oxQgXcc9cSc&origin=" . str_replace(' ', '+', $location_a) . "&destination=" . str_replace(' ', '+', $location_b) . "&sensor=false";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_all = json_decode($response);
    // print_r($response);
    $distance = ($response_all->routes[0]->legs[0]->distance->value) / 1000; // KM
    
    echo json_encode($fare * $distance);
} else {
    // Invalid method
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
