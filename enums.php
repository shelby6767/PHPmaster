<?php

enum DaysOfWeek {
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = DaysOfWeek::WEDNESDAY;

if($today === DaysOfWeek::WEDNESDAY){
    echo"It is Wed\n";
}

function isWeekend(DaysOfWeek $day): bool {
    return $day === DaysOfWeek::SATURDAY || $day === DaysOfWeek::SUNDAY;
}

echo isWeekend(DaysOfWeek::WEDNESDAY) ? "Yes" : "No";

