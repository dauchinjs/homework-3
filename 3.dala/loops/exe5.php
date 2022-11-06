<?php

$dice = rand(1, 6);
$score = $dice;
echo "Welcome to Piglet!";
echo PHP_EOL;
echo "You rolled a {$dice}!";
echo PHP_EOL;
if($dice == 1) {
    echo "You lost. You got 0 points.";
    echo PHP_EOL;
    exit;
}

while(true) {

    $dice = rand(1, 6);

    $selection = readline("Roll again? yes or no? ");
    echo PHP_EOL;
    if($selection == "yes") {
        echo "You rolled a {$dice}!";
        echo PHP_EOL;
    } else if($selection == "no") {
        echo "You got {$score} points.";
        echo PHP_EOL;
        exit;
    }

    if($dice == 2) {
        $score = $score + 2;
    } else if($dice == 3) {
        $score = $score + 3;
    } else if($dice == 4) {
        $score = $score + 4;
    } else if($dice == 5) {
        $score = $score + 5;
    } else if($dice == 6) {
        $score = $score + 6;
    } else if($dice == 1) {
        echo "You lost. You got 0 points.";
        echo PHP_EOL;
        exit;
    }
}



