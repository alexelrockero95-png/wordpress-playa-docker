<?php
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';


function tema_setup() {
    register_nav_menus( array(
        'primary' => __( 'Menú Principal', 'nom-tema' ),
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'tema_setup' );

// ✅ DEIXAR l'estructura, 🔴 CANVIAR la font
function tema_scripts() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css',
        array(),
        '4.6.2'
    );

    wp_enqueue_style(
        'tema-style',
        get_stylesheet_uri(),
        array( 'bootstrap', 'google-fonts' ),
        '1.0'
    );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script(
        'popper',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',
        array( 'jquery' ),
        '1.16.1',
        true
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js',
        array( 'jquery', 'popper' ),
        '4.6.2',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'tema_scripts' );