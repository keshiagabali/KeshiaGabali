<!-- menu -->
<nav class="menu menu-overlay">

    <div class="menu-container">

        <?php
            wp_nav_menu([
                'theme_location' => 'header-menu',
                'container'      => false
            ]);
        ?>
        
    </div>

</nav>