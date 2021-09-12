<?php

//(aとbを受けっとて)足し算する関数
function add($a, $b)
{
    $sum = $a + $b;
    //returnは最後に返す値
    return $sum;
}

echo add(2, 3);
echo '<br>';

var_dump(add(1, 2));