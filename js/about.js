document.addEventListener('DOMContentLoaded', function () {
    // Ajoute un délai de 100 ms avant d'exécuter le code
    setTimeout(function() {
        // Sélectionne tous les éléments avec la classe 'skill-level'
        var skillLevels = document.querySelectorAll('.skill-level');

        // Pour chaque élément 'skill-level', met à jour sa largeur en fonction de l'attribut 'data-skill-level'
        skillLevels.forEach(function (skillLevel) {
            // Récupère la valeur de l'attribut 'data-skill-level'
            var level = skillLevel.getAttribute('data-skill-level');
            // Définit la largeur de l'élément en fonction de la valeur récupérée
            skillLevel.style.width = level;
        });
    }, 100); // Délai de 100 ms avant l'exécution du code
});