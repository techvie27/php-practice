<?php

function greet($name, $greeting = "Hello", $punct = "!") {
    echo "$greeting, $name$punct\n";
}

greet("Amit", punct: "?");
greet(greeting: "Hi", name: "Ravi");