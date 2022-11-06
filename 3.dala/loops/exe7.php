<?php

$desiredSum = readline("Enter your desired sum: ");

do {
    $dice1 = rand(1, 6);
    $dice2 = rand(1, 6);
    $rolledSum = $dice1 + $dice2;
    echo "{$dice1} and {$dice2} = {$rolledSum}";
    echo PHP_EOL;
} while ($rolledSum != $desiredSum);