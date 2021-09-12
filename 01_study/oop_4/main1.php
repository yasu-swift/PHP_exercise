<?php
//1度だけ読み込む _once無いと何度も読み込む
// __DIR__ フルパス
require_once __DIR__ . '/User1.php';
require_once __DIR__ . '/Person1.php';


$bob = new User('Bob', 21);
$tom = new User('Tom', 22);
$ken = new Person('Ken', 23);

echo $bob->selfIntroduction();
echo $bob->greet('小原');
echo $tom->selfIntroduction();
echo $tom->greet('小原');
echo $ken->selfIntroduction();
echo $ken->greet('小原');