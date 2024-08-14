///////////////////////////////////////////////////////
// FCAT Point Of Sales Front End                     //
// Copyright (c) Dalumpines, Eunicys S.              //
// Date Developed : August 2024                      //
// https://github.com/sycinue-rdc                    //
///////////////////////////////////////////////////////

// ======================================================= Menu Buttons
const buttons = document.querySelectorAll('.top button');
const menuIndicator = document.querySelector('.button-indicator');

// Set the initial position of the indicator
menuIndicator.style.top = '0';

// Set the initial active state for the first button
buttons[0].classList.add('active');

buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        buttons.forEach(btn => btn.classList.remove('active'));
        // Add active class to the clicked button
        button.classList.add('active');
        // Move the indicator
        menuIndicator.style.top = `${index * 25}%`; // Adjust position based on button index
    });
});

// ======================================================= Dine In Take Out
const dineInButton = document.getElementById('dineIn');
const dineOutButton = document.getElementById('takeOut');
const dineIndicator = document.querySelector('.indicator');

dineInButton.addEventListener('click', () => {
    dineInButton.classList.add('active');
    dineOutButton.classList.remove('active');
    dineIndicator.style.left = '0'; // Move indicator to Dine In
});

dineOutButton.addEventListener('click', () => {
    dineOutButton.classList.add('active');
    dineInButton.classList.remove('active');
    dineIndicator.style.left = '50%'; // Move indicator to Dine Out
});

// ======================================================= Order Quantity
(function () {
    const quantityContainer = document.querySelector(".quantity");
    const minusBtn = quantityContainer.querySelector(".minus");
    const plusBtn = quantityContainer.querySelector(".plus");
    const inputBox = quantityContainer.querySelector(".input-box");
  
    updateButtonStates();
  
    quantityContainer.addEventListener("click", handleButtonClick);
    inputBox.addEventListener("input", handleQuantityChange);
  
    function updateButtonStates() {
      const value = parseInt(inputBox.value);
      minusBtn.disabled = value <= 1;
      plusBtn.disabled = value >= parseInt(inputBox.max);
    }
  
    function handleButtonClick(event) {
      if (event.target.classList.contains("minus")) {
        decreaseValue();
      } else if (event.target.classList.contains("plus")) {
        increaseValue();
      }
    }
  
    function decreaseValue() {
      let value = parseInt(inputBox.value);
      value = isNaN(value) ? 1 : Math.max(value - 1, 1);
      inputBox.value = value;
      updateButtonStates();
      handleQuantityChange();
    }
  
    function increaseValue() {
      let value = parseInt(inputBox.value);
      value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
      inputBox.value = value;
      updateButtonStates();
      handleQuantityChange();
    }
  
    function handleQuantityChange() {
      let value = parseInt(inputBox.value);
      value = isNaN(value) ? 1 : value;
  
      // Execute your code here based on the updated quantity value
      console.log("Quantity changed:", value);
    }
  })();
  
// ======================================================= Onclick Button Show
const incqueue = document.getElementsByClassName('minus');
const decqueue = document.getElementsByClassName('plus');
const quantityvalue = document.getElementsByClassName('itmquantity');

function addcart(){
  document.getElementById('ordrnum').style.display='block';
  document.getElementById('ordrlist').style.display='block';
  document.getElementById('addcart').style.display='none';
  document.getElementById('hero').style.width='calc(100vw - 225px - 420px';
}