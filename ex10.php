<?php

declare(strict_types=1);

$prices = [100, 250, 400, 800];
$taxRate = 0.18;

// Step 1: keep prices above 200
$filteredPrices = array_filter($prices, fn($price) => $price > 200);
echo "Filtered:\n";
print_r($filteredPrices);

// Step 2: add 18% tax to each
$withTax = array_map(fn($price) => $price * (1 + $taxRate), $filteredPrices);
echo "With tax:\n";
print_r($withTax);

// Step 3: total
$total = array_sum($withTax);
echo "Total: " . number_format($total, 2) . "\n";