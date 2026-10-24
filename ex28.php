<?php

class Student {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }
}

new Student();
new Student();
new Student();

echo Student::$count . "\n";