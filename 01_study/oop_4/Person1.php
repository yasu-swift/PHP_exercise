<?php

require_once __DIR__ . '/User1.php';
            //extends Userコピーしてます
class Person extends User
{
    public function greet($to)
    {
        return 'こんにちは' . $to . 'さん、いい天気ですね';
    }
}