<?php

include_once 'Car.php';


class Tesla extends Car
{
    public function intro() {
        return "This is the new model of Roadster! Its color is $this->color. Speed is +$this->speed mph. Gearbox is $this->gear. Born in $this->year.";
    }
}

$rr = new Tesla('Glacier Blue', 250, 'BorgWarner', 2020);
echo $rr->intro();
