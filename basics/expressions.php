<?php

echo "Welcome to PHP\n";

$name = "John Doe";

echo "Hello, " . $name . "!\n";

$pizzas = 3;
$slicesPerPizza = 8;
$totalSlices = $pizzas * $slicesPerPizza;

echo "Total pizza slices: " . $totalSlices . "\n";

$isHungry = true;

echo "Hungry?";
echo $isHungry ? " Yes" : " No";