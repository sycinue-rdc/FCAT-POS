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
