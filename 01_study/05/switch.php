<?php
$hour = 6;
switch ($hour) {
    case '6':
        echo 'おはようございます';
        break;
    case '12':
        echo 'こんにちは';
        break;
    
    default:
        echo 'どうも';
        break;
}
echo '<hr>';

// if文で書くと...
if ($hour == 6) {
    echo 'おはようございます';
}elseif ($hour == '12') {
    echo 'こんにちは';
} elseif ($hour == '18') {
    echo 'こんばんは';
} else {
    echo 'どうも';
}