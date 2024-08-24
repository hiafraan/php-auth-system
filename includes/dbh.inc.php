<?php

// Database connection details
$host = 'localhost';
$dbname = 'users_db';
$dbusername = 'root';
$dbpassword = '';

try {
    // Create connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
