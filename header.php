<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keshia Gabali</title>
    
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<?php wp_head(); ?>

</head>

<body>
    <div id="page" class="site">

        <header id="site-header" class="header">

            <div class="header-left">

                <div class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </div>
                
            </div>

            <div class="header-right">

                <!-- menu burger button -->
                <div class="menu-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <!-- menu -->
                <?php include ('templates_part/menu.php'); ?>

            </div>

        </header>