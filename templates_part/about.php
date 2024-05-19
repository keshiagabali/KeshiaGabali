<?php
/**
 * Template Name: About Page
 *
 * Ce modèle est utilisé pour afficher une page de about.
 */
?>

<?php get_header(); ?>

<!-- Section "About" -->
<section id="about" class="about-cv">

    <!-- Conteneur principal du CV -->
    <div class="container-cv">

        <!-- En-tête du CV -->
        <div class="header-cv">
            <h1>Keshia Gabali</h1>
            <h3>Développeuse/Intégratrice Wordpress</h3>
        </div>

        <!-- Contenu du CV -->
        <div class="content-cv">

            <!-- Colonne gauche du CV -->
            <div class="left-column-cv">
                <h2>Contact</h2>
                <p class="description">Email: keshia.dev@yahoo.com</p>
                <p class="description">Paris, France</p>
                
                <h2>Education</h2>
                <p class="description">Développeur Wordpress - Openclassrooms</p>
                <p class="description">Formation Technicienne Support - Consort Group</p>
                <p class="description">BTS Management Commercial Opérationnel - CNED</p>
                
                <h2>Skills</h2>
                <!-- Compétences avec barres de progression -->
                <div class="skill">
                    <p>HTML</p>
                    <div class="skill-bar">
                        <div class="skill-level" data-skill-level="90%"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>CSS</p>
                    <div class="skill-bar">
                        <div class="skill-level" data-skill-level="85%"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>JavaScript</p>
                    <div class="skill-bar">
                        <div class="skill-level" data-skill-level="70%"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>PHP</p>
                    <div class="skill-bar">
                        <div class="skill-level" data-skill-level="80%"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>WordPress</p>
                    <div class="skill-bar">
                        <div class="skill-level" data-skill-level="75%"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>Responsive</p>
                    <div class="skill-bar">
                        <div class="skill-level" data-skill-level="65%"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>Git</p>
                    <div class="skill-bar">
                        <div class="skill-level" data-skill-level="60%"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>MySQL</p>
                    <div class="skill-bar">
                        <div class="skill-level" data-skill-level="70%"></div>
                    </div>
                </div>
            </div>

            <!-- Colonne droite du CV -->
            <div class="right-column-cv">
                <p class="description">Développeuse Wordpress débutante.<br>Passionnée par les nouvelles technologies, créative et autonome, ayant travaillé sur des projets variés.</p>
                
                <h2>Experience</h2>
                <!-- Expériences professionnelles -->
                <p class="description">Assistante E-Commerce - Velvet Imperial</p>
                <ul class="description">
                    <li>Gestion des ventes en ligne : mise à jour, gestion des stocks.</li>
                    <li>Création de visuels attractifs pour les produits.</li>
                    <li>Création d'un site e-commerce Wordpress.</li>
                    <li>Mise en place de campagnes promotionnelles pour augmenter les ventes.</li>
                </ul>

                <p class="description">Stage Développeuse Web - Velvet Imperial</p>
                <ul class="description">
                    <li>Collaboration avec une équipe pour la création de sites web responsives en HTML, CSS et JavaScript.</li>
                </ul>

                <p class="description">Support Technique - Consort Group</p>
                <ul class="description">
                    <li>Assistance technique dans la résolution des problèmes informatiques pour les utilisateurs.</li>
                    <li>Gestion des tickets d'assistance technique pour assurer leur résolution dans les délais impartis.</li>
                    <li>Collaboration avec les équipes techniques pour garantir une assistance efficace et professionnelle.</li>
                </ul>
            </div>

        </div>

    </div>

</section>

<?php get_footer(); ?>