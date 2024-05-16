<?php
/**
 * Template Name: Contact Page
 *
 * Ce modèle est utilisé pour afficher une page de contact.
 */
?>

 <?php get_header(); ?>

 <section id="contact" class="contact">

    <div class="contact-form">

        <div class="contact-form-tittle">

            <h2>Say Hello !</h2>

        </div>

        <div class="form">

            <?php echo do_shortcode('[contact-form-7 id="82081b0" title="Formulaire de contact"]'); ?>

        </div>

    </section>

<?php get_footer(); ?>