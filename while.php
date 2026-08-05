<?php

// $secret = "magic";
// $attempts = 0;
// $maxAttempts = 5;

// while ($attempts < $maxAttempts){
//     echo "Guess the password: ";
//     $guess = trim(fgets(STDIN));
//     $attempts++;

//     if($guess == $secret){
//         echo "Youre correct! You're HIM \n";
//         break;
//     }else if ($attempts == $maxAttempts){
//         echo "Sorry, you've reached the maximum number of attempts.";
//     } else {
//         echo "Wrong! Try again. Attempts Left: " . ($maxAttempts - $attempts) . "\n";
//     }
// }

$counter = 1;
$maxNumber = 7;

while($counter <= $maxNumber){
    if($counter % 3 == 0){
        echo "Fizz!\n";
    }else {
        echo $counter . "\n";
    }
    
    $counter++;
}