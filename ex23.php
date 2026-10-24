<?php

class Car {
    public $speed = 0;

    public function accelerate() {
        $this->speed += 10;
    }
}

$car1 = new Car();
$car2 = new Car();
$car1->accelerate();
$car2->accelerate();
$car2->accelerate();
$car2->accelerate();
echo $car1->speed;
echo "\n";
echo $car2->speed;