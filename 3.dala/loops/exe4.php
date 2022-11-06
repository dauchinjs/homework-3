<?php

class FizzBuzz {
    public int $userNumber;
    public function fizzBuzzFunction() {
        for($i = 1; $i <= $this->userNumber; $i++) {
            if($i % 3 === 0 && $i % 5 === 0 && $i % 20 === 0) {
                echo "FizzBuzz ";
                echo PHP_EOL;
            } else if($i % 3 === 0 && $i % 20 === 0) {
                echo "Fizz ";
                echo PHP_EOL;
            } else if($i % 5 === 0 && $i % 20 === 0) {
                echo "Buzz ";
                echo PHP_EOL;
            } else if($i % 3 === 0 && $i % 5 === 0) {
                echo "FizzBuzz ";
            } else if($i % 3 === 0) {
                echo "Fizz ";
            } else if($i % 5 === 0) {
                echo "Buzz ";
            } else {
                echo $i . ' ';
            }
        }
    }
}
$program = new FizzBuzz();
$program->userNumber = readline("Enter max value: ");
echo $program->fizzBuzzFunction();





