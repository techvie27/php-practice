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

    $stmt = $pdo->prepare("UPDATE users SET email = :email WHERE id = :id");
    $stmt->execute([
        'email' => 'ravi.new@mail.com',
        'id'    => 3,
    ]);

    echo $stmt->rowCount() . " row updated\n";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
