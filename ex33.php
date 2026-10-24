<?php

interface Payable {
    public function pay($amount);
}

class CreditCard implements Payable {
    public function pay($amount) {
        echo "Paid $amount by card\n";
    }
}

class Paypal implements Payable {
    public function pay($amount) {
        echo "Paid $amount via PayPal\n";
    }
}

$c = new CreditCard();
$c->pay(100); // Output: Paid 100 by card

$p = new Paypal();
$p->pay(100); // Output: Paid 100 via PayPal