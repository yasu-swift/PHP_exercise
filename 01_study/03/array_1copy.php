<?php
# PHP5.4以降
$profile = [
    'Bob',
    21,
    [
        'Bob',
        'Tom',
        'Ken'
    ]
];

# PHP5.3以前
# $members = array('Bob', 'Tom', 'Ken');

// echo $profile[0] . '<br>';
// echo $profile[1] . '<br>';
// echo $profile[2][0] . '<br>';
// echo $profile[2][1] . '<br>';
// echo $profile[2][2] . '<br>';
// echo $profile; //これでは Array と表示されるだけ
var_dump($profile);
echo '<br>';
print_r($profile);

// 配列を使わない場合は1つ1つ変数を用意しなければいけない
$menbers_1 = 'Bob';
$menbers_2 = 'Tom';
$menbers_3 = 'Ken';


