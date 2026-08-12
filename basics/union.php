<?php
declare(strict_types=1);

function processInput(int|float|string $input) {
    // Process the input based on its type
    return match(true) {
        is_int($input) => "Integer: " . ($input * 2),
        is_float($input) => "Float: " . ($input / 2),
        is_string($input) => "String: " . strtoupper($input),
        default => "Unknown type",
    };
}

$inputs = [42, 3.14, "hello"];
foreach($inputs as $input) {
    echo processInput($input) . "\n";
}