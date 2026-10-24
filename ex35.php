<?php
namespace Shop;

class Product {
    public function show() {
        echo "Shop product\n";
    }
}

$p = new Product();
$p->show();
echo Product::class . "\n";