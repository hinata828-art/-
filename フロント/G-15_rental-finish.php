<?php session_start(); ?>
<?php require '../common/header.php'; ?>
<?php require '../common/db-connect.php'; ?>
<?php
$connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
$delivery_days = '未定'; // 初期値（エラー時の表示用）

try {
    $pdo = new PDO($connect, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT rental_days FROM rental ORDER BY rental_id DESC LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $delivery_days = $result['rental_days'];
    }

} catch (PDOException $e) {
    $delivery_days = 'エラー';
    // エラー処理はここで行う
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>購入完了</title>
    <link rel="stylesheet" href="../css/G-15_rental-finish.css"> 
</head>
<body>
    <img src="../img/NishimuraOnline.png" alt="ニシムラOnline" class="logo-image">

    <div class="message-area">
        レンタルが完了しました！！！！
    </div>

    <div class="delivery-date">
        お届け日 : <span><?php echo htmlspecialchars($delivery_days); ?>日後</span>
    </div>

    <a href="../G-8_home.php" class="home-button">ホーム画面へ</a>
</body>
</html>
