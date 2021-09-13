<?php
require_once __DIR__ . '/Person.php';

require_once __DIR__ . '/Car.php';


$car = new Car('ランクル', 100, 'black',
               'アルファード', 200, 'red', );

echo $car->selfIntroduction();