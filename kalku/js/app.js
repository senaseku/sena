    let display = document.getElementById('display');
    let currentInput = '';

    function appendNumber(number) {
      if (currentInput === '0' && number !== '.') {
        currentInput = number;
      } else {
        currentInput += number;
      }
      display.innerText = currentInput;
    }

    function clearDisplay() {
        currentInput = '0';
        display.innerText = currentInput;
    }

    function deleteNumber () {
      currentInput = currentInput.slice(0, -1);
      if (currentInput === '') {
        currentInput = '0';
      }
      display.innerText = currentInput;
    }

    function calculate() {
    try {
        currentInput = eval(currentInput);
        if (currentInput === Infinity || isNaN(currentInput)) {
        throw new Error('Invalid calculation');
    }
    } catch (e) {
        showAlert('Hasil tidak Ditemukan');
    }
    display.innerText = currentInput;
    }
    function showAlert(message) {
        const alertBox = document.getElementById('alert');
        alertBox.innerText = message;
        alertBox.classList.add('show');
        setTimeout(() => {
            alertBox.classList.remove('show');
        }, 3000);
    }