<?php

class Vehicle {
    public function start() {
        echo "Vehicle started\n";
    }
}

class Bike extends Vehicle {
    public function start() {
        parent::start();
        echo "Bike kick-started!\n";
    }
}

$b = new Bike();
$b->start();