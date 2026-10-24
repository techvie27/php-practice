<?php

class Book {
    public $title;
    public $price;

    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }
}

$b1 = new Book("PHP Basics", 500);
$b2 = new Book("WordPress Pro", 800);

echo $b1->title . " costs " . $b1->price . "\n";
echo $b2->title . " costs " . $b2->price . "\n";