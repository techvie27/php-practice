<?php

$host = '127.0.0.1';
$port = '10005';
$db   = 'local';
$user = 'root';
$pass = 'root';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "Connected\n";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}