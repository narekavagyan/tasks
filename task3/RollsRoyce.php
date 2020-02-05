<?php

include_once 'Car.php';


class RollsRoyce extends Car
{
    public function intro() {
        return "This is the new model of Wraith! Its color is $this->color. Speed is $this->speed mph. Gearbox is $this->gear. Born in $this->year.";
    }
}

$rr = new RollsRoyce('Midnight Sapphire', 155, 'aerospace UltraFan', 2019);
echo $rr->intro();
