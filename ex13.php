<?php

declare(strict_types=1);

$text = "PHP,Git,MySQL,WordPress";

$skills = explode(',', $text);
print_r($skills);

foreach ($skills as $skill) {
    echo $skill . "\n";
}

echo implode(' | ', $skills) . "\n";