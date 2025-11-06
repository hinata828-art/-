<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>退会確認 | ニシムラOnline</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="G-6退会確認.css">
</head>
<body>
    <?php require __DIR__ . '/../common/header.php'; ?>
    
    <div class="container">
        <header class="header">
            <img src="img/rogo" alt="ニシムラOnline" class="logo">
        </header>

        <main class="confirm-box">
            <div class="alert-icon">⚠️</div>
            <p class="confirm-text">退会しますか？</p>
            <div class="button-group">
                <form action="withdraw-complete.php" method="post">
                    <button type="submit" class="btn btn-red">はい</button>
                </form>
                <form action="G-8ホーム.php" method="get">
                    <button type="submit" class="btn btn-yellow">いいえ</button>
                </form>
            </div>
        </main>
    </div>
    
</body>
</html>
