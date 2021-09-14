<?php

use function PHPUnit\Framework\at;

class Car
{   
    private $car_name;
    private $car_num;
    private $car_colour;


    public function __construct($car_name, $car_num, $car_colour,)
    {
        $this->car_name = $car_name;
        $this->car_num = $car_num;
        $this->car_colour = $car_colour;
    }

    public function getCarName()
    {
        return $this->car_name;
    }

    public function getCarNum()
    {
        return $this->car_num;
    }
    public function getCarColour()
    {
        return $this->car_colour;
    }

    public function information()
    {
        return '車の車種:' . $this->car_name . '、車体番号:' . $this->car_num .
                '、カラー:' . $this->car_colour. 'です。';
    }

    // public function setCarName($car_name)
    // {
    //     $this->car_name = $car_name;
    // }

    // public function setCarNum($car_num)
    // {
    //     $this->car_num = $car_num;
    // }
    // public function setCarColour($car_colour)
    // {
    //     $this->car_colour = $car_colour;
    // }

    
}
//車1台目表示
$car1 = new car('ランクル', 100, 'brack');

    echo $car1->getCarName();
    echo '<br>';

    echo $car1->getCarNum();
    echo '<br>';

    echo $car1->getCarColour();
    echo '<br>';

    echo $car1->information();
    echo '<br>';
//2台目表示
$car2 = new car('アルフォード', 200, 'red');
    echo $car2->getCarName();
    echo '<br>';

    echo $car2->getCarNum();
    echo '<br>';

    echo $car2->getCarColour();
    echo '<br>';

    echo $car2->information();
    echo '<br>';
