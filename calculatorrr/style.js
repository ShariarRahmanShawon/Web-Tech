let display = document.getElementById('display');

function press(value) {
  display.value += value;
}

function backspace() {
  display.value = display.value.slice(0, -1);
}

function clearDisplay() {
  display.value = '';
}

function calculate() {
  
    
    display.value = eval(display.value);
  
}
