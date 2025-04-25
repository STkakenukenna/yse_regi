<?php
// ダミーデータ（売上履歴）
$salesHistory = [
    ['amount' => 1500, 'created_at' => '2025-04-10 14:00:00'],
    ['amount' => 2200, 'created_at' => '2025-04-09 11:30:00'],
    ['amount' => 1800, 'created_at' => '2025-04-08 10:45:00'],
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>🎟 チケット売上ログ 🎟</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background: linear-gradient(to right, #f9f7f7, #fddde6);
            text-align: center;
            padding: 40px;
            color: #333;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            display: inline-block;
        }
        h2 {
            font-size: 1.5em;
            color: #ff5ca2;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #ffe3ec;
            color: #d6336c;
        }
        td {
            font-size: 1.2em;
            position: relative;
        }
        .amount {
            animation: bounce 0.8s ease;
            display: inline-block;
            color: #ff4d6d;
            font-weight: bold;
        }
        @keyframes bounce {
            0% { transform: scale(1); }
            30% { transform: scale(1.3); }
            60% { transform: scale(0.9); }
            100% { transform: scale(1); }
        }
        .back-button {
            margin-top: 20px;
            display: inline-block;
            background: #f06595;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.9em;
        }
        .mascot {
            margin-top: 30px;
        }
        .mascot img {
            width: 80px;
        }
        .mascot .text {
            margin-top: 10px;
            font-size: 0.9em;
            color: #ff6b81;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🎟 チケット売上ログ 🎟</h2>
        <table>
            <thead>
                <tr>
                    <th>売上日時</th>
                    <th>金額</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salesHistory as $sale): ?>
                    <tr>
                        <td><?= $sale['created_at'] ?></td>
                        <td><span class="amount"><?= number_format($sale['amount']) ?>円</span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="back-button" href="index.php">← レジに戻る</a>

        <div class="mascot">
            <img src="https://cdn.pixabay.com/photo/2023/10/08/18/34/unicorn-8301290_960_720.png" alt="ユニコーン">
            <div class="text">ファンタジーな売上！キミすごい！🦄</div>
        </div>
    </div>
</body>
</html>