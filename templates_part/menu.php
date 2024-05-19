<!-- Menu Overlay -->
<nav class="menu menu-overlay">

    <!-- Conteneur du menu -->
    <div class="menu-container">

        <?php
            // Affiche le menu WordPress pour l'emplacement 'header-menu'
            wp_nav_menu([
                'theme_location' => 'header-menu', // Emplacement du menu dans le thème
                'container'      => false          // Désactiver l'ajout du conteneur par défaut
            ]);
        ?>

    </div>

</nav>