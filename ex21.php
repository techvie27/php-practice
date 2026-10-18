<?php
function divide(int $a, int $b): float
{
    if ($b === 0) {
        throw new Exception('Cannot divide by zero');
    }
    return $a / $b;
}

try {
    echo divide(10, 2) . "<br>";
    echo divide(10, 0) . "<br>";   // this throws
    echo "This line never runs.<br>";
} catch (Exception $e) {
    echo "Error: " . htmlspecialchars($e->getMessage()) . "<br>";
}

echo "Script continues.";