<?php get_header(); ?>

<!-- Section principale -->
<main id="primary" class="site-main">

    <!-- Section de l'arrière-plan de l'index -->
    <div class="background-index">

        <!-- Contenu principal de l'index -->
        <div class="content-index">

            <!-- Titre animé -->
            <h1 class="animated-title">Hello!<br>Je suis Keshia</h1>
            
            <!-- Description animée -->
            <p class="description animated-description">
                Développeuse Wordpress. Passionnée par les nouvelles technologies, créative et autonome, ayant travaillé sur des projets variés pour divers clients.
            </p>

            <!-- Bouton animé vers la page "work" -->
            <a href="<?php echo get_permalink(get_page_by_path('work')); ?>" class="view-work-button animated-button">View Work</a>
        </div>

        <!-- Section des particules -->
        <div id="particles-js"></div>

    </div>

</main>

<?php get_footer(); ?>