<?php

function greet(string $name, string $greeting ="Hello", bool $shout = false): string {
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n"; // Default greeting and no shout
echo greet("Bob", "Hi") . "\n"; // Custom greeting and no shout
echo greet("Charlie", "Hey", true) . "\n"; // Custom greeting and shout

echo greet(name: "Diana", shout: false) . "\n"; // Default greeting and shout