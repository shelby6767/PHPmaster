<?php

$basket = [
    "Apple" => 3,
    "Banana" => 5,
    "Orange" => 2
];

$total = 0;

foreach($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    $total += $quantity;
}
echo "Total items in basket: $total\n";