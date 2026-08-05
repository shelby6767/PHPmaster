<?php

$x = 10;
if ($x > 5) {
    echo "x is greater than 5\n";
}

$score = 85;
if( $score >= 90) {
    echo "A";
} else if ($score >= 80) {
    echo "B";
} else if ($score >= 70) {
    echo "C";
} else if ($score >= 60) {
    echo "D";
} else {
    echo "F";
}


$num = 15;
if ($num > 0) {
    if ($num % 2 == 0) {
        echo "\nPositive even number\n";
    } else {
        echo "\nPositive odd number\n";
    }
} else {
    echo "\nNon-positive number\n";
}

$username = "admin";
$password = "password123";
if ($username == "admin" && $password == "password123") {
    echo "\nAccess granted\n";
} else {
    echo "\nAccess denied\n";
}