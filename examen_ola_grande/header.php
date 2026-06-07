<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); // ✅ DEIXAR: carrega tots els CSS/JS registrats a functions.php ?>
</head>
<body <?php body_class(); ?>>

<?php
// ✅ DEIXAR: Tot el navbar és codi fix.
// L'únic que canvia visualment son els colors (via CSS :root).
?>

<nav class="navbar navbar-expand-md">

    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img
            src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
            alt="<?php bloginfo( 'name' ); ?>"
        >
        <?php // 🔴 CANVIAR: el nom del fitxer logo.png si el professor en dóna un altre ?>
    </a>

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
</nav> ```

---

### 5. `index.php` (Plantilla de emergencia)
```php
<?php get_header(); ?>

<main class="container my-4">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else : ?>
        <p><?php _e( 'No s\'ha trobat contingut.', 'ola-nueva-wp' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>