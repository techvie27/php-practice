<?php

enum Role: string {
    case Admin = 'admin';
    case Guest = 'guest';
}

echo Role::Admin->value . "\n"; // Output: admin

$message = match (Role::Admin) {
    Role::Admin => 'Full access.',
    Role::Guest => 'Read only',
};

echo $message . "\n"; 