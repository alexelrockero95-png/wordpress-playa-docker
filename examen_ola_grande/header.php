<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); /* ✅ DEIXAR: carrega tots els CSS/JS registrats a functions.php */ ?>
</head>
<body <?php body_class(); ?>>

<?php
/*
 * ✅ DEIXAR: Tot el navbar és codi fix.
 * No cal tocar res aquí — el menú és dinàmic (ve de l'admin de WordPress).
 * L'únic que canvia visualment son els colors (via CSS :root).
 */
?>

<nav class="navbar navbar-expand-md">

    <!-- Logo (esquerra) — ✅ DEIXAR l'estructura -->
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img
            src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
            alt="<?php bloginfo( 'name' ); ?>"
        >
        <!-- 🔴 CANVIAR: el nom del fitxer logo.png si el professor en dóna un altre -->
    </a>

    <!-- Botó hamburguesa (< md) — ✅ DEIXAR -->
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#menuPrincipal"
        aria-controls="menuPrincipal"
        aria-expanded="false"
        aria-label="Obrir menú"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú dinàmic WordPress (dreta, ml-auto) — ✅ DEIXAR tot -->
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
  
