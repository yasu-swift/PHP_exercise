<?php
$profile = [
    'Bob',
    21,
    [
        'Tom',
        'Ken',
        'John'
    ]
    ];

    var_dump($profile); //全ての要素を探ってくれる

    echo '<hr>'; // 水平線を入れるタグ

    print_r($profile); //キーが2つのデータはArrayとだけ表示される