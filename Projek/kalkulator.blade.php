<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>kalkulator</title>
        <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="kalkulator">
    <div id="alert" class="alert"></div>
    <div id="display" class="display">0</div>
    <div class="buttons">
        <button type="button" class="button operator" onclick="clearDisplay()">C</button>
        <button type="button" class="button clear" onclick="appendNumber('%')">%</button>
        <button type="button" class="button clear" onclick="appendNumber('*')">*</button>
        <button type="button" class="button operator" onclick="deleteNumber()">DEL</button>

        <button type="button" class="button" onclick="appendNumber('7')">7</button>
        <button type="button" class="button" onclick="appendNumber('8')">8</button>
        <button type="button" class="button" onclick="appendNumber('9')">9</button>
        <button type="button" class="button clear" onclick="appendNumber('+')">+</button>
       
        <button type="button" class="button" onclick="appendNumber('4')">4</button>
        <button type="button" class="button" onclick="appendNumber('5')">5</button>
        <button type="button" class="button" onclick="appendNumber('6')">6</button>
        <button type="button" class="button clear" onclick="appendNumber('-')">-</button>

        <button type="button" class="button" onclick="appendNumber('1')">1</button>
        <button type="button" class="button" onclick="appendNumber('2')">2</button>
        <button type="button" class="button" onclick="appendNumber('3')">3</button>
        <button type="button" class="button clear" onclick="calculate('=')">=</button>

        <button class="button" onclick="appendNumber('0')">0</button>
        <button class="button" onclick="appendNumber('.')">.</button>
        
</div>
</body>
<script src="js/app.js"></script>
</html>