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

    $stmt = $pdo->prepare("SELECT id, name, email FROM users WHERE id = :id");
    $stmt->execute(['id' => 1]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo $user['name'] . " - " . $user['email'] . "\n";
    } else {
        echo "No user found\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
