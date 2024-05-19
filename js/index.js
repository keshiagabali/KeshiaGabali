document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne l'élément avec l'ID 'particles-js'
    const particlesElement = document.getElementById('particles-js');

    // Vérifie si l'élément existe sur la page
    if (particlesElement) {
        // Initialise les particules avec particles.js
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80, // Nombre de particules
                    "density": {
                        "enable": true, // Activer la densité des particules
                        "value_area": 800 // Zone de densité
                    }
                },
                "color": {
                    "value": "#ffffff" // Couleur des particules
                },
                "shape": {
                    "type": "circle", // Forme des particules
                    "stroke": {
                        "width": 0, // Largeur du contour
                        "color": "#000000" // Couleur du contour
                    },
                    "polygon": {
                        "nb_sides": 5 // Nombre de côtés si la forme est un polygone
                    },
                    "image": {
                        "src": "img/github.svg", // Chemin de l'image si la forme est une image
                        "width": 100, // Largeur de l'image
                        "height": 100 // Hauteur de l'image
                    }
                },
                "opacity": {
                    "value": 0.5, // Opacité des particules
                    "random": false, // Opacité aléatoire désactivée
                    "anim": {
                        "enable": false, // Animation de l'opacité désactivée
                        "speed": 1, // Vitesse de l'animation
                        "opacity_min": 0.1, // Opacité minimale
                        "sync": false // Synchronisation de l'animation désactivée
                    }
                },
                "size": {
                    "value": 3, // Taille des particules
                    "random": true, // Taille aléatoire activée
                    "anim": {
                        "enable": false, // Animation de la taille désactivée
                        "speed": 40, // Vitesse de l'animation
                        "size_min": 0.1, // Taille minimale
                        "sync": false // Synchronisation de l'animation désactivée
                    }
                },
                "line_linked": {
                    "enable": true, // Activer les lignes liant les particules
                    "distance": 150, // Distance maximale entre les particules pour dessiner une ligne
                    "color": "#ffffff", // Couleur des lignes
                    "opacity": 0.4, // Opacité des lignes
                    "width": 1 // Largeur des lignes
                },
                "move": {
                    "enable": true, // Activer le mouvement des particules
                    "speed": 6, // Vitesse du mouvement
                    "direction": "none", // Direction du mouvement
                    "random": false, // Mouvement aléatoire désactivé
                    "straight": false, // Mouvement non linéaire
                    "out_mode": "out", // Mode de sortie des particules
                    "bounce": false, // Désactiver le rebond
                    "attract": {
                        "enable": false, // Attraction désactivée
                        "rotateX": 600, // Rotation X pour l'attraction
                        "rotateY": 1200 // Rotation Y pour l'attraction
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas", // Détecter l'interaction sur le canvas
                "events": {
                    "onhover": {
                        "enable": true, // Activer l'interaction au survol
                        "mode": "repulse" // Mode de l'interaction au survol (repousse)
                    },
                    "onclick": {
                        "enable": true, // Activer l'interaction au clic
                        "mode": "push" // Mode de l'interaction au clic (ajout de particules)
                    },
                    "resize": true // Redimensionner les particules lors du redimensionnement de la fenêtre
                },
                "modes": {
                    "grab": {
                        "distance": 400, // Distance pour attraper les particules
                        "line_linked": {
                            "opacity": 1 // Opacité des lignes lors de l'attraction
                        }
                    },
                    "bubble": {
                        "distance": 400, // Distance pour l'effet de bulle
                        "size": 40, // Taille des bulles
                        "duration": 2, // Durée de l'effet de bulle
                        "opacity": 8, // Opacité des bulles
                        "speed": 3 // Vitesse de l'effet de bulle
                    },
                    "repulse": {
                        "distance": 200, // Distance pour repousser les particules
                        "duration": 0.4 // Durée de l'effet de repousse
                    },
                    "push": {
                        "particles_nb": 4 // Nombre de particules ajoutées au clic
                    },
                    "remove": {
                        "particles_nb": 2 // Nombre de particules supprimées
                    }
                }
            },
            "retina_detect": true // Détection des écrans Retina
        });
    }
});