<?php
# PHP5.4以降
$menbers = ['Bob', 'Tom', 'Ken'];

# PHP5.3以前
# $members = array('Bob', 'Tom', 'Ken');

echo $menbers[0] . '<br>';
echo $menbers[1] . '<br>';
echo $menbers[2] . '<br>';
echo $menbers; //これでは Array と表示されるだけ

// 配列を使わない場合は1つ1つ変数を用意しなければいけない
$menbers_1 = 'Bob';
$menbers_2 = 'Tom';
$menbers_3 = 'Ken';

