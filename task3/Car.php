<?php


abstract class Car
{
    public $color;
    public $speed;
    public $gear;
    public $year;

    public function __construct($color, $speed, $gear, $year)
    {
        $this->color = $color;
        $this->speed = $speed;
        $this->gear = $gear;
        $this->year = $year;
    }

    abstract public function intro();
}
