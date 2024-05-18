<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keshia Gabali</title>
    
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

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

                <!-- menu -->
                <?php include ('templates_part/menu.php'); ?>

            </div>

        </header>