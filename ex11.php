<?php

declare(strict_types=1);

$text = "  Hello, WordPress World!  ";
$trimmedText = trim($text);

echo "Original: '" . $text . "'\n";
echo "Trimmed: '" . $trimmedText . "'\n";
echo "Lowercase: " . strtolower($trimmedText) . "\n";
echo "Length before trim: " . strlen($text) . "\n";
echo "Length after trim: " . strlen($trimmedText) . "\n";
echo "Contains 'WordPress': " . (str_contains($trimmedText, 'WordPress') ? 'Yes' : 'No') . "\n";

echo "Replaced: " . str_replace('WordPress', 'PHP', $trimmedText) . "\n";
echo "Starts with 'Hello': " . (str_starts_with($trimmedText, 'Hello') ? 'Yes' : 'No') . "\n";