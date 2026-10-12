<?php

declare(strict_types=1);

function formatPrice(float $price, string $currency = 'INR'): string
{
    return number_format($price, 2) . ' ' . $currency;
}

function calculateTotal(float $price, int $quantity, float $taxPercent): float
{
    $subtotal = $price * $quantity;
    $tax = $subtotal * ($taxPercent / 100);

    return round($subtotal + $tax, 2);
}

echo formatPrice(calculateTotal(100.0, 2, 5.0)) . "\n";
echo formatPrice(calculateTotal(price: 50.0, quantity: 3, taxPercent: 10.0)) . "\n";
echo formatPrice(calculateTotal(19.99, 3, 18.0)) . "\n";