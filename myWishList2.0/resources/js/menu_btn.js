import './bootstrap.js';

const menu = document.getElementById('menu');
const deroulant = document.getElementById('deroulant');
menu.addEventListener('click', () => {
    menu.classList.toggle('active');
    deroulant.classList.toggle('active');
});