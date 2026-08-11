<?php

// $person = "john";
// $client = &$person;

// var_dump($person, $client);

// $client = "jane";

// var_dump($person, $client);

// $person = "doe";

// var_dump($person, $client);

function doubleValue(int &$number): int {
    $number *= 2;
    return $number;
}

$original = 5;
doubleValue($original);
var_dump($original);