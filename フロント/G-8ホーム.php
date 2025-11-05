<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- スマホ拡大防止 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>トップページ</title>

    <!-- 共通ヘッダーCSS -->
    <link rel="stylesheet" href="../css/header.css">
    <!-- パンくずCSS -->
    <link rel="stylesheet" href="../css/breadcrumb.css">
    <!-- ページ固有CSS -->
    <link rel="stylesheet" href="../css/G-8ホーム.css">
</head>

<body>
    <!-- ▼ 共通ヘッダー -->
    <?php require __DIR__ . '/../common/header.php'; ?>
    <!-- ▲ 共通ヘッダー -->

    <!-- ▼ パンくずリスト -->
    <?php
    $breadcrumbs = [
        ['name' => '現在のページ']
    ];
    require __DIR__ . '/../common/breadcrumb.php';
    ?>
    <!-- ▲ パンくずリスト -->

    <main>
    <section class="pickapp">
        <div class="pickapp-label">
            <h2>おすすめ商品！！！</h2>
        </div>

        <!-- スライダー全体 -->
        <div class="slider-container">
            <!-- 左ボタン -->
            <button class="slider-btn left" id="prevBtn">&#10094;</button>

            <!-- スライダー内容 -->
            <div class="pickapp-items" id="slider">
                <div class="item">
                    <img src="../img/sample1.jpg" alt="AQUAVIEW 55V型 4K 有機ELテレビ">
                    <div class="item-info">
                        <p class="item-title">AQUAVIEW 55V型<br>4K 有機ELテレビ</p>
                        <p class="item-price">¥128,000</p>
                        <button class="item-btn">詳細</button>
                    </div>
                </div>

                <div class="item">
                    <img src="../img/sample2.jpg" alt="COOLWAVE 400L 冷蔵庫">
                    <div class="item-info">
                        <p class="item-title">COOLWAVE 400L 冷蔵庫</p>
                        <p class="item-price">¥89,800</p>
                        <button class="item-btn">詳細</button>
                    </div>
                </div>

                <div class="item">
                    <img src="../img/sample3.jpg" alt="BREEZE 6kg 洗濯機">
                    <div class="item-info">
                        <p class="item-title">BREEZE 6kg 洗濯機</p>
                        <p class="item-price">¥49,800</p>
                        <button class="item-btn">詳細</button>
                    </div>
                </div>

                <div class="item">
                    <img src="../img/sample4.jpg" alt="SmartClean 掃除機">
                    <div class="item-info">
                        <p class="item-title">SmartClean 掃除機</p>
                        <p class="item-price">¥25,800</p>
                        <button class="item-btn">詳細</button>
                    </div>
                </div>
            </div>

            <!-- 右ボタン -->
            <button class="slider-btn right" id="nextBtn">&#10095;</button>
        </div>
    </section>

    <!-- スライダー操作スクリプト -->
    <script>
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        prevBtn.addEventListener('click', () => {
            slider.scrollBy({ left: -300, behavior: 'smooth' });
        });
        nextBtn.addEventListener('click', () => {
            slider.scrollBy({ left: 300, behavior: 'smooth' });
        });
    </script>
</main>


</body>
</html>
