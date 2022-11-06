<?php
class AsciiFigure {
    public int $sizeChoice;
    public function AsciiFigureFormula() {
        for($i = 0; $i < $this->sizeChoice; $i++) {

            for($j = 0; $j < $this->sizeChoice * 4 - $i * 4 - 4; $j++){
                echo chr(47); // "/"
            }
            if($this->sizeChoice == 7) {
                for($k = 0; $k < (($this->sizeChoice * $i) - $i * 3) * 2; $k++) {
                    echo chr(42); // "*"
                }
            } else if($this->sizeChoice == 5) {
                for($k = 0; $k < (($this->sizeChoice * $i) - $i * 3) * 4; $k++) {
                    echo chr(42); // "*"
                }
            } else if($this->sizeChoice == 3) {
                for($k = 0; $k < ($this->sizeChoice * $i - $i) * 4 ; $k++) {
                    echo chr(42); // "*"
                }
            }
            for($j = 0; $j < $this->sizeChoice * 4 - $i * 4 - 4; $j++){
                echo chr(92); // "\"
            }
            echo PHP_EOL;
        }
    }
}

$program = new AsciiFigure();
$program->sizeChoice = readline("Choose figure size between 3, 5 and 7: ");
echo $program->AsciiFigureFormula();



