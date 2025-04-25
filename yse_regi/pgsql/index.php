<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>YSEレジシステム</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Fredoka', sans-serif;
      background: #f5f7fa;
      text-align: center;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 400px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .display {
      font-size: 2.5em;
      padding: 20px;
      background: #eee;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .buttons button {
      width: 70px;
      height: 70px;
      font-size: 1.5em;
      margin: 5px;
      border: none;
      border-radius: 10px;
      transition: all 0.2s ease;
    }
    .buttons button:hover {
      transform: scale(1.1);
      background: #dce3f3;
      cursor: pointer;
    }
    .danger {
      background-color: #ff6b6b;
      color: white;
    }
    .blue {
      background-color: #4dabf7;
      color: white;
    }
    .mascot {
      position: relative;
      margin-bottom: 20px;
    }
    .mascot img {
      width: 80px;
    }
    .bubble {
      position: absolute;
      top: -10px;
      left: 90px;
      background: #fff;
      border: 2px solid #ccc;
      border-radius: 10px;
      padding: 10px;
      width: 180px;
      font-size: 0.9em;
      box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
    }
  </style>
  <script>
    function appendNumber(num) {
      const display = document.getElementById("display");
      if(display.innerText === "0") display.innerText = "";
      display.innerText += num;
    }
    function clearDisplay() {
      document.getElementById("display").innerText = "0";
      alert("全部忘れたフリね！");
    }
    function add() {
      const display = document.getElementById("display");
      display.innerText = parseInt(display.innerText || 0) + 1000;
    }
    function multiply() {
      const display = document.getElementById("display");
      display.innerText = parseInt(display.innerText || 1) * 2;
    }
    function appendDot() {
      const display = document.getElementById("display");
      if (!display.innerText.includes(".")) display.innerText += ".";
    }
  </script>
</head>
<body>
  <div class="container">
    <div class="mascot">
      <img src="https://cdn.pixabay.com/photo/2017/01/31/15/38/pig-2025794_960_720.png" alt="マスコット">
      <div class="bubble">今日もたくさん売っちゃおう！</div>
    </div>
    <div class="display" id="display">0</div>
    <div class="buttons">
      <button onclick="appendNumber(7)">7</button>
      <button onclick="appendNumber(8)">8</button>
      <button onclick="appendNumber(9)">9</button>
      <button class="danger" onclick="clearDisplay()">AC</button>

      <button onclick="appendNumber(4)">4</button>
      <button onclick="appendNumber(5)">5</button>
      <button onclick="appendNumber(6)">6</button>
      <button class="blue" onclick="add()">＋</button>

      <button onclick="appendNumber(1)">1</button>
      <button onclick="appendNumber(2)">2</button>
      <button onclick="appendNumber(3)">3</button>
      <button class="blue" onclick="multiply()">×</button>

      <button onclick="appendNumber(0)">0</button>
      <button onclick="appendDot()">.</button>
    </div>
  </div>
</body>
</html>
