let display = document.getElementById("display");
let current = "";
let total = 0;
let lastInput = "";
let sales = 0;

function appendNumber(num) {
    current += num;
    updateDisplay(current);
  }
  

function updateDisplay(value) {
    display.textContent = value; // ← カンマ区切りは一旦外して文字列をそのまま表示！
}
  
  
  

function clearDisplay() {
  current = "";
  total = 0;
  lastInput = "";
  updateDisplay(0);
}

function multiply() {
  lastInput = current;
  current = "";
}

function add() {
  total += parseInt(current || "0");
  current = "";
  updateDisplay(total);
}

function tax() {
  let taxed = Math.floor(parseInt(current || "0") * 1.10);
  current = taxed.toString();
  updateDisplay(current);
}

function calculate() {
  if (lastInput !== "") {
    total = parseInt(lastInput) * parseInt(current || "1");
    current = total.toString();
    updateDisplay(current);
    lastInput = "";
  } else {
    total += parseInt(current || "0");
    updateDisplay(total);
  }
}

function register() {
  sales += parseInt(display.textContent || "0");
  clearDisplay();
}

function showSales() {
  updateDisplay(sales);
}
function formatNumber(value) {
  // 数字以外を含む場合（例: "00", "0010" など）はそのまま表示
  if (!/^\d+$/.test(value)) return value;

  // 数字文字列の先頭の 0 を保持するため、先にそのまま返す
  if (value.startsWith("0") && value.length > 1) return value;

  // 数値としてカンマを付ける（通常の 3 桁区切り）
  const num = parseInt(value, 10);
  return num.toLocaleString();
}
function appendDoubleZero() {
    current += "00";
    updateDisplay(current);
}
    