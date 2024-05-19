<?php
/**
 * Template Name: Work Page
 *
 * Ce modèle est utilisé pour afficher une page de portfolio.
 */
?>

<?php get_header(); ?>

<section id="work" class="work">

    <div class="container-projet">

        <h1>Portfolio</h1>

        <div class="projects-grid">
            <?php
            // La boucle pour récupérer les projets
            $args = array(
                'post_type' => 'projet',
                'posts_per_page' => -1
            );
            $projets = new WP_Query($args);

            if ($projets->have_posts()) :
                while ($projets->have_posts()) : $projets->the_post();
                    $description = get_field('description');
                    $imgmobile = get_field('imgmobile');
                    $imgdesktop = get_field('imgdesktop');
                    $github = get_field('github');
                    ?>

                    <div class="project">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="project-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                        <?php endif; ?>
                        <a class="project-title" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <div class="description">
                            <?php echo $description; ?>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No projects found</p>';
            endif;
            ?>
        </div>

    </div>

</section>

<?php get_footer(); ?>