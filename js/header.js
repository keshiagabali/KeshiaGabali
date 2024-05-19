document.addEventListener('DOMContentLoaded', function() {

    // Sélectionne l'élément du menu burger
    const burger = document.querySelector('.menu-burger');

    // Sélectionne l'élément overlay du menu
    const menuOverlay = document.querySelector('.menu-overlay');

    // Ajoute un écouteur d'événement 'click' sur le menu burger
    burger.addEventListener('click', function() {
        // Toggle la classe 'open' sur le menu burger pour l'animation de croix
        burger.classList.toggle('open');
        // Toggle la classe 'open' sur l'overlay du menu pour afficher ou cacher le menu
        menuOverlay.classList.toggle('open');
    });
});