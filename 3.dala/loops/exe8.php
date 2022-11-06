<?php

$minNumber = (int) readline("Enter min number: ");
$maxNumber = (int) readline("Enter max number: ");

$amount = $maxNumber - $minNumber + 1;
for($i = 0; $i < $amount; $i++) {
    for($j = 0; $j < $amount; $j++) {
        echo $minNumber + ($i+$j) % $amount;
    }
    echo PHP_EOL;
}