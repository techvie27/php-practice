<?php
$name = basename($_GET['file'] ?? '');
$path = __DIR__ . '/files/' . $name;

if ($name !== '' && is_file($path) && is_readable($path)) {
    echo nl2br(htmlspecialchars(file_get_contents($path)));
} else {
    echo 'File not found.';
}