<?php

trait Logger {
    public function log($msg) {
        echo "Log: $msg\n";
    }
}

class Order {
    use Logger;

}

class User
{
 use Logger;
 }

$o = new Order();
$o->log("Order created"); // Output: Log: Order created

$u = new User();
$u->log("User registered"); // Output: Log: User registered