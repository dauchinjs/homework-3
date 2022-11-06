<?php

$terms = readline("Input number of terms(what to multiply, how many times): ");
[$i, $n] = explode(' ', $terms);

$result = 1;
for($x = 0; $x < $n; $x++) {
    $result *= $i;
}
echo $result;
echo PHP_EOL;
