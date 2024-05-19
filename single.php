<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        // Récupère les champs personnalisés
        $description = get_field('description');
        $imgmobile = get_field('imgmobile');
        $imgdesktop = get_field('imgdesktop');
        $github = get_field('github');
        $next_post = get_next_post();

        // Si aucun projet suivant n'existe, récupérer le premier projet
        if (empty($next_post)) {
            $args = array(
                'post_type' => 'projet',
                'posts_per_page' => 1,
                'order' => 'ASC',
                'orderby' => 'date'
            );
            $first_post_query = new WP_Query($args);
            if ($first_post_query->have_posts()) {
                $first_post_query->the_post();
                $next_post = get_post();
                wp_reset_postdata();
            }
        }
        ?>

        <!-- Section image de héros -->
        <section class="hero-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
        </section>

        <!-- Section de description -->
        <section class="description-section">
            <div class="container-description">
                <h2>
                    <?php echo $description; ?>
                </h2>
            </div>
        </section>

        <!-- Section image desktop -->
        <section class="desktop-image-section">
            <?php if ($imgdesktop) : ?>
                <img src="<?php echo esc_url($imgdesktop['url']); ?>" data-src="<?php echo esc_url($imgdesktop['url']); ?>" alt="<?php echo esc_attr($imgdesktop['alt']); ?>" class="desktop-image lazy">
            <?php endif; ?>
        </section>

        <!-- Section icône GitHub -->
        <section class="icon-github-section">
            <div class="container-github">
                <?php if ($github) : ?>
                    <a href="<?php echo esc_url($github); ?>" target="_blank" class="github-link">
                        <i class="fa-brands fa-github icon-github"></i>
                    </a>
                <?php endif; ?>
            </div>
        </section>

        <!-- Section image mobile -->
        <section class="mobile-image-section">
            <?php if ($imgmobile) : ?>
                <img src="<?php echo esc_url($imgmobile['url']); ?>" data-src="<?php echo esc_url($imgmobile['url']); ?>" alt="<?php echo esc_attr($imgmobile['alt']); ?>" class="mobile-image lazy">
            <?php endif; ?>
        </section>

        <!-- Section projet suivant -->
        <section class="next-project-section">
            <div class="container-next-project">
                <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-project-link">
                        Projet Suivant : <?php echo get_the_title($next_post->ID); ?>
                    </a>
                <?php else : ?>
                    <p>No more projects</p>
                <?php endif; ?>
            </div>
        </section>

    <?php endwhile;
endif;
?>

<?php get_footer(); ?>