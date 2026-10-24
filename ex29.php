<?php

class Vehicle {
    public function start() {
        echo "Vehicle started\n";
    }
}

class Bike extends Vehicle {
    public function wheelie() {
        echo "Wheelie!\n";
    }
}

$b = new Bike();
$b->start();
$b->wheelie();