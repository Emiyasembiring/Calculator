<?php

/**
 * Menampilkan calculate di list
 */
function showcalculate()
{
    global $calculate;

    echo "calculate" . PHP_EOL;
    
    foreach ($calculate as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}