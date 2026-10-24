<?php

class User {
    public function __construct(public string $name) {}
}

$a = new User("Amit");
$b = null;

echo $a?->name . "\n";           // Amit
echo ($b?->name ?? "No user") . "\n";   // No user