<?php
$file = __DIR__ . '/notes.txt';

file_put_contents($file, "First line\n");
file_put_contents($file, "Second line\n", FILE_APPEND);

$content = file_get_contents($file);
echo nl2br(htmlspecialchars($content));