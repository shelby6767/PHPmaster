<?php

$int = 42;
$float = 3.14;
$stringToInt = (int) "123";
$stringToFloat = (float) "3.14";

var_dump($int, $float, $stringToInt, $stringToFloat);

var_dump(
    round(3.7),
    round(3.4),
    floor(3.7),
    ceil(3.4),
    min(1, 2, 3, 4, 5),
    max(1, 2, 3, 4, 5),
    rand(1,10),
    abs(-5)
);

$number = 1234.89555555;

echo "Formatted number: " . number_format($number, 2, '.', ',') . "\n";