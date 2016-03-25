<?php

// Add multi-language support
load_theme_textdomain('next', get_template_directory().'/languages');

// Remove invalid information display at head tag
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );

// Register menus
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus( array(
        'site_nav'     => __( '站点导航', 'next' ),
        'social_links' => __( '社交链接', 'next' ),
        'links'        => __( '友情链接', 'next' )
    ) );
}

// Site menu active class
add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );
function special_nav_class ( $classes, $item ) {
    if( in_array ( 'current-menu-item', $classes ) ) {
        $classes[] = 'menu-item-active ';
    }
    return $classes;
}

// Theme Options Page
include_once('functions/options.php');

// Remove Open Sans
function next_remove_open_sans() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_style( 'open-sans','' );
}
add_action('init','next_remove_open_sans');

// Import function files
include 'functions/markdown.php';
