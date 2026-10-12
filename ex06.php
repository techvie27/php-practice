<?php
declare(strict_types=1);
function greet(string $name): string {
    return "Hello, $name!";
}

$names = ["John", "Jane", "Alice", "Bob"];

foreach ($names as $name) {
    echo greet($name) . "\n";
}