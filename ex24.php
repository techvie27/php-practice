<?php
class Person {
    public $name = "";
    public $age = 0;

    public function birthday() {
        $this->age += 1;
    }
}

$p1 = new Person();
$p2 = new Person();

$p1->name = "Amit";
$p1->age = 30;
$p2->name = "Ravi";
$p2->age = 25;

$p1->birthday();

echo $p1->name . " is " . $p1->age . " years old.\n";
echo $p2->name . " is " . $p2->age . " years old.\n";