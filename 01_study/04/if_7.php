<?php

// 2種類のテストの得点により合否判定を行う
// どちらのテストも80点以上: 合格
// どちらかのテストが50点以上: 追試
// 上記2つの条件を満たさない:  不合格

echo '1つ目の点数を入力して下さい: ';
$score_1 = fgets(STDIN);

echo '2つ目の点数を入力して下さい: ';
$score_2 = fgets(STDIN);

if ($score_1 >= 80 && $score_2 >= 80) {
    echo '合格';
} elseif ($score_1 >= 50 || $score_2 >= 50) {
    echo '追試';
} else {
    echo '不合格';
}