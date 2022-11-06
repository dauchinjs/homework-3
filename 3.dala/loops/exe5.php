<?php

class Piglet {
    
    public $score;

    public function __constructor($score) {
        $this->score = $score;
    }

    public function playPiglet() {

        echo "Welcome to Piglet!" . PHP_EOL;

        while (true) {

            $dice = rand(1, 6);
            echo "You rolled a $dice!" . PHP_EOL;
            if($dice == 1) {
                echo "You lost. You got 0 points." . PHP_EOL;
                exit;
            }

            $this->score+=$dice;

            $selection = readline("Roll again? yes or no? ");
            echo PHP_EOL;
            if ($selection !== "yes") {
                echo "You got {$this->score} points." . PHP_EOL;
                exit;
            }
        }
    }
}

$game = new Piglet();
echo $game->playPiglet();
