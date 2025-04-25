<?php
// ダミーデータ（計上売上履歴）
$salesHistory = [
    ['amount' => 1400, 'created_at' => '2025-04-10 14:00:00'],
    ['amount' => 2400, 'created_at' => '2025-04-09 11:30:00'],
    ['amount' => 2000, 'created_at' => '2025-04-08 10:45:00'],
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>今日の戦果</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Press Start 2P', cursive;
            background: #222;
            color: #00ff99;
            text-align: center;
            padding: 30px;
        }
        .container {
            background: #111;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
        }
        h2 {
            margin-bottom: 30px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #00ff99;
            padding: 10px;
        }
        .back-button {
            color: #fff;
            background: #00ff99;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.7em;
        }
        .mascot {
            margin-top: 20px;
        }
        .mascot img {
            width: 60px;
        }
        .message {
            margin-top: 10px;
            font-size: 0.6em;
        }
    </style>
    <script>
        window.onload = () => {
            const counters = document.querySelectorAll(".count-up");
            counters.forEach(counter => {
                const amount = +counter.getAttribute("data-amount");
                let current = 0;
                const interval = setInterval(() => {
                    if (current < amount) {
                        current += Math.ceil(amount / 20);
                        if (current > amount) current = amount;
                        counter.innerText = current.toLocaleString() + "円";
                    } else {
                        clearInterval(interval);
                    }
                }, 50);
            });
        };
    </script>
</head>
<body>
    <div class="container">
        <h2>💰 今日の戦果一覧 💰</h2>
        <table>
            <thead>
                <tr>
                    <th>計上日時</th>
                    <th>金額</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salesHistory as $index => $sale): ?>
                    <tr>
                        <td><?= $sale['created_at'] ?></td>
                        <td><span class="count-up" data-amount="<?= $sale['amount'] ?>">0円</span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="back-button" href="index.php">← レジに戻る</a>
        <div class="mascot">
            <img src="https://cdn.pixabay.com/photo/2021/07/06/09/45/chick-6391586_960_720.png" alt="ひよこ">
            <div class="message">よくがんばったね！また明日も頼んだよ！</div>
        </div>
    </div>
</body>
</html>
