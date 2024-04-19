<?php
$host = '127.0.0.1';
$dbname = 'rtntax_taxi';
$username = 'rtntax_taxi';
$password = 'Taxi@@1990';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die ("Database connection failed: " . $e->getMessage());
}