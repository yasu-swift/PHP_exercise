<?php
$message = '';
$err_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    // バリデーション
    if (empty($message)) {
        $err_message = '未入力です';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>フォームの練習</title>
    </head>

    <body>
        <h1>XSS対策</h1>
        <form action="" method="post">
            <div>
                <label for="">メッセージ</label><br>
                <input type="text" name="message">
                <?php if($err_message): ?>
                    <ul>
                        <li><? $err_message ?></li>
                    </ul>
                <?php endif; ?>
            </div>
            <div>
                <input type="submit" value="送信">
            </div>
        </form>
        <div>
            <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
        </div>
    </body>

</html>