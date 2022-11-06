<?php


$firstWord = readline("Enter first word: ");
$secondWord = readline("Enter second word: ");

$lengthLeft = 30 - strlen($firstWord) - strlen($secondWord);
echo $firstWord;
for($i = 0; $i < $lengthLeft; $i++) {
    echo '.';
}
echo $secondWord;
echo PHP_EOL;