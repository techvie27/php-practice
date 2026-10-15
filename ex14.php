<?php

if (!isset($_COOKIE['username'])) {
    setcookie('username', 'Amit', time() + 3600, '/'); // Cookie expires in 1 hour
    echo "Cookie set. Refresh the page";
} else {
   echo "Welcome back, " . htmlspecialchars($_COOKIE['username']);
}