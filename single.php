<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $description = get_field('description');
        $imgmobile = get_field('imgmobile');
        $imgdesktop = get_field('imgdesktop');
        $next_post = get_next_post();

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
        
        <section class="hero-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
        </section>
        
        <section class="description-section">
            <div class="container-description">
                <div class="description">
                    <?php echo $description; ?>
                </div>
            </div>
        </section>

        <section class="desktop-image-section">
            <?php if ($imgdesktop) : ?>
                <img src="<?php echo esc_url($imgdesktop['url']); ?>" alt="<?php echo esc_attr($imgdesktop['alt']); ?>" class="desktop-image">
            <?php endif; ?>
        </section>

        <section class="github-section">
            <div class="container-github">
                <div class="icon-github">
                    <?php echo $description; ?>
                </div>
            </div>
        </section>

        <section class="mobile-image-section">
            <?php if ($imgmobile) : ?>
                <img src="<?php echo esc_url($imgmobile['url']); ?>" alt="<?php echo esc_attr($imgmobile['alt']); ?>" class="mobile-image">
            <?php endif; ?>
        </section>

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