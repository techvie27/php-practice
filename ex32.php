<?php

abstract class Shape {
    abstract public function area();
}

class Rectangle extends Shape {
    private $w;
    private $h;

    public function __construct($w, $h) {
        $this->w = $w;
        $this->h = $h;
    }

    public function area() {
        return $this->w * $this->h;
    }
}

$r = new Rectangle(5, 3);
echo $r->area(); // Output: 15
