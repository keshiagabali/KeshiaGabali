document.addEventListener('DOMContentLoaded', function () {
    const labels = document.querySelectorAll('.form label');
    const form = document.querySelector('.form');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('hidden');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    labels.forEach(label => {
        label.classList.add('hidden');
        observer.observe(label);
    });

    const title = document.querySelector('.contact-form-title h2');
    
    if (title) {
        title.classList.add('hidden');
        observer.observe(title);
    } 
});