<?php

require_once __DIR__ . '/Person.php';


class Car extends Person
{


    public function __construct($car1_name, $car1_num, $car1_colour,
                                $car2_name, $car2_num, $car2_colour)
    {
        parent::__construct($car1_name, $car1_num, $car1_colour,
                            $car2_name, $car2_num, $car2_colour);
    }

    public function selfIntroduction()
    {
        return  $this->getCar1Name().'<br>'.
                $this->getCar1Num(). '<br>'.
                $this->getCra1Colour(). '<br>'.
                '車の車種は：' .
                $this->getCar1Name(). "、 車体番号:\n".
                $this->getCar1Num() . "、カラー:\n".
                $this->getCra1Colour(). "です。". '<br>'.


                $this->getCar2Name().'<br>'.
                $this->getCar2Num(). '<br>'.
                $this->getCra2Colour(). '<br>'.
                '車の車種は：' .
                $this->getCar2Name(). "、 車体番号:\n".
                $this->getCar2Num() . "、カラー:\n".
                $this->getCra2Colour(). "です。";

    }
    

}

