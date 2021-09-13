<?php

$score_math = 80;
$score_english = 70;

if ($score_math >= 60 && $score_english >= 60) {
    echo '合格';
}elseif($score_math >= 30 || $score_english >= 30){
    echo '再試験';
}else {
    echo '不合格';
}
