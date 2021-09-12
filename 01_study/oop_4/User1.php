<?php

class User
{

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    //インスタントメソッド
    public function greet($to){
        return 'こんにちは' . $to . 'さん<br>';
    }

    public function selfIntroduction()
    {                       // $this自分自身の->name
        return '私の名前は' . $this->name . 'です<br>' . 
                '年齢は' . $this->age . 'です<br>';
    }
}