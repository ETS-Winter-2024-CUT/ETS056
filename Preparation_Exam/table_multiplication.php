<?php

define("N_MAX", 10);

for ($i = 1; $i <= N_MAX; $i++) {
    for ($j = 1; $j <= N_MAX; $j++) {
        echo $i * $j . " ";
    }

    if (PHP_SAPI === 'cli') {
        echo PHP_EOL; // For console environment
    } else {
        echo "<br>"; // For web environment
    }
}
