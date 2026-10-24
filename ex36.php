<?php

class Person {
    public function __construct(
         public $name,
         public $age
    ) {}
}

$p = new Person("Amit", 30);
echo $p->name . " is " . $p->age . "\n";