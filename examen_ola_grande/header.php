<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="La Ola Grande">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Obrir menú">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'           => 2,
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'menuPrincipal',
        'menu_class'      => 'navbar-nav ml-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
</nav> 

