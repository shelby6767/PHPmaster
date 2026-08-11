<?php

declare(strict_types=1);

function sum(int ...$numbers){
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

var_dump(sum(5,1,9,8,7,3));

function introduceTeam(string $teamName, string ...$members) {
    echo "Team: $teamName\n";
    echo "Members: " . implode("," , $members) . "\n";
}

introduceTeam("Avengers", "Iron Man", "Captain America", "Thor", "Hulk");

$members = ["Harry", "Johny", "Joe"];

introduceTeam("Team B", ...$members);