<?php session_start(); ?>
<?php require 'common/header.php'; ?>
<?php 
// db-connect.php で $pdo が定義されていると仮定
require 'common/db-connect.php'; 
?>
<?php
$delivery_days = '未定'; // 初期値（エラー時の表示用）

try {
    // db-connect.php で作成された $pdo をそのまま使う
    $sql = "SELECT rental_days FROM rental ORDER BY rental_id DESC LIMIT 1";
    $stmt = $pdo->prepare($sql); // new PDO(...) を削除
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $delivery_days = $result['rental_days'];
    }

} catch (PDOException $e) {
    $delivery_days = 'エラー';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>購入完了</title>
    <link rel="stylesheet" href="G-15_rental-finish.css"> 
</head>
<body>
    <img src="img/NishimuraOnline.png" alt="ニシムラOnline" class="logo-image">

    <div class="message-area">
        レンタルが完了しました！！！！
        仮変更２回目
    </div>

    <div class="delivery-date">
        お届け日 : <span><?php echo htmlspecialchars($delivery_days); ?>日後</span>
    </div>

    <a href="G-8home.php" class="home-button">ホーム画面へ</a>

</body>
</html>
