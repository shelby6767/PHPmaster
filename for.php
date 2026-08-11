<?php

echo "Rocket Launch countdown: 10 seconds remaining...\n";

for($i = 10; $i > 0; $i--) {
    echo "Time remaining: $i seconds...\n";

    if(1 == $i) {
        echo "Launch OFF!\n";
    }
    sleep(1);
}