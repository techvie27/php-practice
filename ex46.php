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
    $stmt = $pdo->prepare("SELECT id, name, email FROM users WHERE name = :name");
    $search = 'Amit';
    $stmt->execute(['name' => $search]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($rows)) {
        echo "No user found\n";
    }

    foreach ($rows as $row) {
        echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . "\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
