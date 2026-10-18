<?php
ini_set('display_errors', '0');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/errors.log');
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');

function divide(int $a, int $b): float
{
    if ($b === 0) {
        throw new Exception('Cannot divide by zero');
    }
    return $a / $b;
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    error_log('divide() failed: ' . $e->getMessage()
    . ' in ' . $e->getFile() . ':' . $e->getLine());   // for you
    echo 'Sorry, something went wrong.';                  // for the visitor
}