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
                'post_type' => 'projet', // Type de contenu personnalisé 'projet'
                'posts_per_page' => -1 // Récupère tous les projets
            );
            $projets = new WP_Query($args);

            if ($projets->have_posts()) :
                while ($projets->have_posts()) : $projets->the_post();
                    // Récupération des champs personnalisés
                    $description = get_field('description'); // Champ personnalisé 'description'
                    $imgmobile = get_field('imgmobile'); // Champ personnalisé 'imgmobile'
                    $imgdesktop = get_field('imgdesktop'); // Champ personnalisé 'imgdesktop'
                    $github = get_field('github'); // Champ personnalisé 'github'
                    ?>

                    <div class="project">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="project-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                        <?php endif; ?>
                        <a class="project-title" href="<?php the_permalink(); ?>">
                            <?php the_title(); // Titre du projet ?>
                        </a>
                        <div class="description">
                            <?php echo $description; // Description du projet ?>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata(); // Réinitialise les données de la requête
            else :
                echo '<p>No projects found</p>'; // Message si aucun projet n'est trouvé
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>