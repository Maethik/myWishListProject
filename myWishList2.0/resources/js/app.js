import './bootstrap.js';

const searchBtn = document.getElementById('search');
const researchBtn = document.getElementById('research');
const searchInput = document.getElementById('input-searchbar');
searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('active');
    researchBtn.classList.toggle('active');
    searchInput.classList.toggle('active');
});