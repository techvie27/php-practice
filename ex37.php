<?php

$role = 'admin';

$message = match ($role) {
    'admin' => 'Full access.',
    'editor' => 'Can edit.',
    default => 'Read only',
};

echo $message . "\n";