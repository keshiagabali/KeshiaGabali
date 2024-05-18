<?php get_header(); ?>

<main id="primary" class="site-main">

    <div class="video-background">

        <video id="hero_video" src="<?php echo get_stylesheet_directory_uri() . '/video/video-hero.mp4'; ?>" autoplay loop muted></video>

        <div class="sections-home">

            <div class="left-section-home">
                <img src="img/your-image.jpg" alt="Home Image">
            </div>

            <div class="right-section-home">
                <h1>Hi!<br>Je suis Keshia</h1>
                <p class="description">Développeuse Wordpress. Passionnée par les nouvelles technologies, créative et autonome, ayant travaillé sur des projets variés pour divers clients.</p>

                <button class="view-work-button">View Work</button>
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>
