<?php

class Vehicle {
    protected $speed = 0;
}

class Bike extends Vehicle {
    public function go() {
        $this->speed = 20;
        echo "Speed: " . $this->speed . "\n";
    }
}

$b = new Bike();
$b->go();
echo $b->speed; 