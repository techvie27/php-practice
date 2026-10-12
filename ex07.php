<?php

declare(strict_types=1);

function isSenior(int $years): bool
{
    return $years >= 5;
}

$testYears = [0, 4, 5, 13];

foreach ($testYears as $years) {
    echo $years . " years: " . (isSenior($years) ? "Senior" : "Not Senior") . "\n";
}