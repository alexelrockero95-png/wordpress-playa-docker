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
        <p><?php _e( 'No s\'ha trobat contingut.', 'pollos-hermanos' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>