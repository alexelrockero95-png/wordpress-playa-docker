<?php
// functions.php — ✅ DEIXAR tota l'estructura
// 🔴 CANVIAR: nom de la font a Google Fonts

// ✅ DEIXAR: Carrega el navwalker 
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

// ✅ DEIXAR: Configuració bàsica del tema
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

    // 🔴 CANVIAR: Nom i pesos de la font (ha de coincidir amb font-family al CSS)
    // CORREGIDO: Se quitó la etiqueta <link> que rompía el código
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap',
        array(),
        null
    );

    // ✅ DEIXAR: Bootstrap 4 CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css',
        array(),
        '4.6.2'
    );

    // ✅ DEIXAR: Estil principal del tema
    wp_enqueue_style(
        'tema-style',
        get_stylesheet_uri(),
        array( 'bootstrap', 'google-fonts' ),
        '1.0'
    );

    // ✅ DEIXAR: jQuery, Popper i Bootstrap JS
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