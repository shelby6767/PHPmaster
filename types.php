<?php 

$isStudent = 1;
var_dump($isStudent, $isStudent === true);

$scores = [85, (int)"95.5"];
$total = $scores[0] + $scores[1];
var_dump($scores, $total);

echo "The total score is: " . $total . "\n";
