<?php

// Chargement des feuilles de style 
function enqueue_custom_styles() {
    // Feuilles de style personnalisées
    wp_enqueue_style('custom-main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// Chargement des scripts 
function enqueue_custom_scripts() {
    // Scripts personnalisés
    wp_enqueue_script('custom-index-js', get_template_directory_uri() . '/js/index.js', array('jquery'), '1.0', false);
    wp_enqueue_script('custom-about-js', get_template_directory_uri() . '/js/about.js', array('jquery'), '1.0', false);
    wp_enqueue_script('custom-contact-js', get_template_directory_uri() . '/js/contact.js', array('jquery'), '1.0', false);
    wp_enqueue_script('custom-single-js', get_template_directory_uri() . '/js/single.js', array('jquery'), '1.0', false);
    wp_enqueue_script('custom-header-js', get_template_directory_uri() . '/js/header.js', array('jquery'), '1.0', false);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Enregistrement du menu principal dans l'en-tête
function register_header_menu() {
    register_nav_menu('header-menu', __('Menu principal', 'text-domain'));
}
add_action('after_setup_theme', 'register_header_menu');

// Enregistrement du menu dans le pied de page
function register_footer_menu() {
    register_nav_menu('footer-menu', __('Footer Menu', 'text-domain'));
}
add_action('after_setup_theme', 'register_footer_menu');

// Support des images mises en avant
add_theme_support('post-thumbnails');
?>