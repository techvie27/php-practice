<?php

class Book {
    private $price;

    public function __construct($price) {
        $this->price = $price;
    }

    public function setPrice($price) {
        if ($price > 0) {
            $this->price = $price;
        }
    }

    public function getPrice() {
        return $this->price;
    }
}

$b = new Book(500);
$b->setPrice(-100);
echo $b->getPrice() . "\n";
$b->setPrice(700);
echo $b->getPrice() . "\n";