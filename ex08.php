<?php

declare(strict_types=1);

function formatPrice(float $price, string $currency = 'INR'): string
{
    return number_format($price, 2) . ' ' . $currency;
}

echo formatPrice(1234.5) . "\n";
echo formatPrice(1234.5, 'USD') . "\n";
echo formatPrice(price: 9876.54321, currency: 'EUR') . "\n";
echo formatPrice(0) . "\n";