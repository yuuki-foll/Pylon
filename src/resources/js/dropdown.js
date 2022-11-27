const dropdownBtn = document.getElementById('dropdown-btn');
dropdownBtn.addEventListener('click', function() {
    const menu = document.getElementById('dropdown-menu');
    menu.classList.toggle('invisible');
});