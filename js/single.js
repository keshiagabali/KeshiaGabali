document.addEventListener('DOMContentLoaded', function() {

    // Gestion du défilement fluide
    const links = document.querySelectorAll('a[href^="#"]');// Sélection de tous les liens
    for (const link of links) {
        link.addEventListener('click', function(e) {
            e.preventDefault();// Empêcher le comportement par défaut du lien
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth' // Défilement fluide
            });
        });
    }

    // Gestion du chargement différé des images
    const lazyImages = document.querySelectorAll('.desktop-image, .mobile-image');// Sélection de toutes les images avec les classes
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) { // Vérifie si l'image est dans le viewport
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('fade-in'); // Ajoute la classe fade-in pour l'animation
                observer.unobserve(img);// Arrête d'observer
            }
        });
    });

    lazyImages.forEach(img => {
        imageObserver.observe(img);// Observes chaque image pour le chargement différé
    });
});
