<?php

// 処理が実行されない
$i = 0;
while ($i > 10) {
    echo $i . '<br>';
    $i++;
}

echo '<hr>';

// 1回処理が実行される
$j = 0;

do {
    echo $j . '<br>';
    $j++;
} while ($a > 10);