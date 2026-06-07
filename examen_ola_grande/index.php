<?php get_header(); ?>

<main class="container my-4">
    <?php
    // ✅ DEIXAR: Aquest és el bucle (loop) principal per defecte.
    // Si WP no troba una plantilla específica, carregarà el contingut aquí.
    
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
    
        <?php // 🔴 CANVIAR: Missatge d'error si no hi ha res a mostrar ?>
        <p><?php _e( 'No s\'ha trobat contingut.', 'ola-nueva-wp' ); ?></p>
        
    <?php endif; ?>
</main>

<?php get_footer(); ?>