document.addEventListener('DOMContentLoaded', function () {
    // Sélectionne tous les éléments label dans le formulaire
    const labels = document.querySelectorAll('.form label');
    
    // Sélectionne le formulaire
    const form = document.querySelector('.form');

    // Crée un IntersectionObserver pour observer les éléments qui entrent dans le viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) { // Vérifie si l'élément est dans le viewport
                entry.target.classList.remove('hidden'); // Retire la classe 'hidden' pour afficher l'élément
                observer.unobserve(entry.target); // Arrête d'observer l'élément
            }
        });
    }, { threshold: 0.1 }); 

    // Ajoute la classe 'hidden' à chaque label et commence à les observer
    labels.forEach(label => {
        label.classList.add('hidden');
        observer.observe(label);
    });

    // Sélectionne le titre du formulaire de contact
    const title = document.querySelector('.contact-form-title h2');
    
    // Vérifie si le titre existe, puis ajoute la classe 'hidden' et commence à l'observer
    if (title) {
        title.classList.add('hidden');
        observer.observe(title);
    } 
});