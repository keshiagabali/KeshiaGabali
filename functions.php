<?php

// Chargement des feuilles de style 
function enqueue_custom_styles() {
    wp_enqueue_style('custom-theme-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-header-css', get_template_directory_uri() . '/css/header.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-footer-css', get_template_directory_uri() . '/css/footer.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-contact-css', get_template_directory_uri() . '/css/contact.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-about-css', get_template_directory_uri() . '/css/about.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// Chargement des scripts 
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-header-js', get_template_directory_uri() . '/js/header.js', array('jquery'), '1.0', false);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
