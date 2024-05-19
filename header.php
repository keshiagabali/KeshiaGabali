<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keshia Gabali</title>

    <!-- Inclusion de la bibliothèque particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    
    <!-- Inclusion des polices Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Inclusion de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <?php wp_head(); ?>
</head>

<body>
    <div id="page" class="site">

        <!-- En-tête du site -->
        <header id="site-header" class="header">

            <!-- Section gauche de l'en-tête -->
            <div class="header-left">

                <!-- Titre du site -->
                <div class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </div>
                
            </div>

            <!-- Section droite de l'en-tête -->
            <div class="header-right">

                <!-- Bouton du menu burger -->
                <div class="menu-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <!-- Menu -->
                <?php include('templates_part/menu.php'); ?>

            </div>

        </header>