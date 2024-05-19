<?php
/**
 * Template Name: Contact Page
 *
 * Ce modèle est utilisé pour afficher une page de contact.
 */
?>

<?php get_header(); ?>

<!-- Section de contact -->
<section id="contact" class="contact">
    <!-- Formulaire de contact -->
    <div class="contact-form">
        <div class="contact-form-title">
            <h2>Say Hello !</h2>
        </div>
        <!-- Conteneur du formulaire -->
        <div class="form">
            <!-- Affiche le formulaire de contact en utilisant le shortcode Contact Form 7 -->
            <?php echo do_shortcode('[contact-form-7 id="82081b0" title="Formulaire de contact"]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>