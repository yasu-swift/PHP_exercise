<?php
function add($a, $b)
{
    $sum = $a + $b;
    return $sum;
}

echo add(2, 3) . '<br>';

echo '<hr>';

function getCircArea($radius)
{
    return $radius * $radius * pi();
}

echo getCircArea(5);
