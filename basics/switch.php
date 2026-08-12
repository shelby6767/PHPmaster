<?php

$size ="M";

switch($size){
    case "S":
    case "M":
        echo "Small or Medium size selected.\n";
        break;
    case "L":
    case "XL":
        echo "Large size selected.\n";
        break;
    default:
        echo "Invalid size selected.\n";
}

$badAttempts = 4;

switch($badAttempts * 2){
    case 3:
        echo "You are blocked!\n";
    default:
        echo "Bad Attempt detected\n";
}
