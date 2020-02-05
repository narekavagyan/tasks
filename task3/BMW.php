<?php

include_once 'Car.php';


class BMW extends Car
{
    public function intro() {
        return "This is the new model of X7! Its color is $this->color. Speed is $this->speed mph. Gearbox is $this->gear. Born in $this->year.";
    }
}

$rr = new BMW('Ametrin Metallic', 155, '8-speed automatic', 2020);
echo $rr->intro();
