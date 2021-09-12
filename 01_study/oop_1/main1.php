<?php
//1度だけ読み込む _once無いと何度も読み込む
// __DIR__ フルパス
require_once __DIR__ . '/User1.php';

$user = new User();

// var_dump($user);
//  ->アロー(シングルアロー)  =>ダブルアロー(ファットアロー) 意味は違う注意
// echo $user->name;
// echo '<br>';
// echo $user->age . '<br>';
//userクラスのnameを変える
// $user->name = 'Tom';
// echo $user->name . '<br>';
echo $user->greet('Tom');
echo $user->selfIntroduction();
