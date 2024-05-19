document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.menu-burger');
    const menuOverlay = document.querySelector('.menu-overlay');

    burger.addEventListener('click', function() {
        burger.classList.toggle('open');
        menuOverlay.classList.toggle('open');
    });
});