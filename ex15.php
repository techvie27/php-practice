<?php

session_start();
if(!isset($_SESSION['visit'])){
    $_SESSION['visit'] = 0;
}

$_SESSION['visit']++;
echo "You have visited this page " . $_SESSION['visit'] . " times.";