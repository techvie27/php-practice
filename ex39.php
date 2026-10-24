<?php

class Invoice {
    public function __construct(
        public readonly int $number,
        public readonly float $total
    ) {}
}

$i = new Invoice(1001, 2500.50);
echo "Invoice " . $i->number . ": " . $i->total . "\n";
$i->total = 1;