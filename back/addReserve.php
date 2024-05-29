<?php
/* AJAX */
require_once 'config.php';
require_once 'constants.php';
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
    $date = htmlentities($_POST['date']);

    //check if user exist
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=? LIMIT 1"); 
    $stmt->execute([$user_email]); 
    $user = $stmt->fetch();
    if(!$user) {
        $stmt = $pdo->prepare('INSERT INTO users (name, phone, email) VALUES (?, ?, ?)');
        $stmt->execute([$user_name, $user_phone, $user_email]);
        $user_id = $pdo->lastInsertId();
    } else {
        $user_id = $user['id'];
    }

    $stmt = $pdo->prepare('INSERT INTO bookings (location_a, location_b, notes, user_id, service_type_id, booking_date, status) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$start_location, $end_location, $user_notes, $user_id, $service_type, $date, 'pending']);

    //Sending Email To Admin
    $message = "New Reserve";
    $message .= "\r\nService Type:  " . $service_type;
    $message .= "\r\nStart Location:  " . $start_location;
    $message .= "\r\nEnd Location:  " . $end_location;
    $message .= "\r\nUser Name:  " . $user_name;
    $message .= "\r\nUser Phone:  " . $user_phone;
    $message .= "\r\nUser Email:  " . $user_email;
    $message .= "\r\nUser Note:  " . $user_notes;
    mail($admin_email,"New Reserve", $message);

    //Sending Email To User
    /*$message = `
            <div id="email-wrap" style='background: #151515;color: #FFF;'>
            <p>Hi,</p><br>
            <p>Thank you.</p><br>
            <p>Thank you,</p>
            <p>Administration</p>
            </div>
    `;

    // To send HTML mail, the Content-type header must be set
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    mail($user_email,"New Reserve", $message, $headers);*/

    echo json_encode(['message' => 'Booking added successfully']);
} else {
    // Invalid method
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
