<?php
$age = 19;
if ($age > 20) {
    echo 'あなたは成人です';
} elseif($age === 20){
    //20のとき実行される
    echo '成人式ですね';
} else{
    echo 'あなたは未成年です';
}