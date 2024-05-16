<?php

// Chargement des feuilles de style 
function enqueue_custom_styles() {
    wp_enqueue_style('custom-theme-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-header-css', get_template_directory_uri() . '/css/header.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-fonts-css', get_template_directory_uri() . '/css/fonts.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-menu-css', get_template_directory_uri() . '/css/menu.css', array(), '1.0', 'all');
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

// Enregistrement du menu principal dans l'entête
function register_header_menu() {
    register_nav_menu( 'header-menu', __( 'Menu principal', 'text-domain' ) );
}
add_action( 'after_setup_theme', 'register_header_menu' );

// Enregistrement du menu dans le pied de page
function register_footer_menu() {
    register_nav_menu( 'footer-menu', __( 'Footer Menu', 'text-domain' ) );
}
add_action( 'after_setup_theme', 'register_footer_menu' );

