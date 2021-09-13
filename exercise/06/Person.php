<?php
class Person
{

    private $car1_name;
    private $car1_num;
    private $car1_colour;
    private $car2_name;
    private $car2_num;
    private $car2_colour;

    public function __construct($car1_name, $car1_num, $car1_colour,
                                $car2_name, $car2_num, $car2_colour,)
    {
        $this->car1_name = $car1_name;
        $this->car1_num = $car1_num;
        $this->car1_colour = $car1_colour;

        $this->car2_name = $car2_name;
        $this->car2_num = $car2_num;
        $this->car2_colour = $car2_colour;
    }

    public function getCar1Name()
    {
        return $this->car1_name;
    }

    public function getCar1Num()
    {
        return $this->car1_num;
    }
    public function getCra1Colour()
    {
        return $this->car1_colour;
    }

    public function setCar1Name($car1_name)
    {
        $this->car1_name = $car1_name;
    }

    public function setCar1Num($car1_num)
    {
        $this->car1_num = $car1_num;
    }
    public function setCar1Colour($car1_colour)
    {
        $this->car1_colour = $car1_colour;
    }

    
    public function getcar2Name()
    {
        return $this->car2_name;
    }

    public function getcar2Num()
    {
        return $this->car2_num;
    }
    public function getCra2Colour()
    {
        return $this->car2_colour;
    }

    public function setcar2Name($car2_name)
    {
        $this->car2_name = $car2_name;
    }

    public function setcar2Num($car2_num)
    {
        $this->car2_num = $car2_num;
    }
    public function setcar2Colour($car2_colour)
    {
        $this->car2_colour = $car2_colour;
    }

}