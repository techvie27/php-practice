<?php

declare(strict_types=1);

function makeSlug(string $title): string
{
    $slug = strtolower(trim($title));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);

    return trim($slug, '-');
}

$titles = [
    'My First Blog Post',
    '  My First Post  ',
    'Hello   World',
    'PHP & MySQL: A Guide!',
];

foreach ($titles as $title) {
    echo "'" . $title . "' => '" . makeSlug($title) . "'\n";
}