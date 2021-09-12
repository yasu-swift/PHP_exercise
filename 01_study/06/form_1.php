<?php
//変数を用意
$message = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>
<body>
    <h1>POSTメソッド</h1>
    <form action="" method="post">
        <div>
            <label for="">メッセージ</label><br>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <p><?= $message ?></p>
</body>

</html>