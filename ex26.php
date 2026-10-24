<?php

class Book {
    private $title;
    private $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return $this->price;
    }
}

$b1 = new Book("PHP Basics", 500);

echo $b1->getTitle() . " costs " . $b1->getPrice() . "\n";
echo $b1->price;