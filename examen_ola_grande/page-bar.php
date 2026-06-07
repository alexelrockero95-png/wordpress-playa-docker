/*

 *
 * ✅ DEIXAR: el comentari "Template Name:" — WordPress el llegeix aquí
 * 🔴 CANVIAR: el nom "Distribution" si el professor demana un altre
 *
 * Template Name: Bar
 */
get_header();
?>
 
<main>
 
    <!-- ① Imatge capçalera SOBRE el jumbotron — ✅ DEIXAR estructura -->
    <div class="jumbotron-wrapper">
        <img
            class="big-logo"
            src="<?php echo get_template_directory_uri(); ?>/images/big.jpg"
            alt="Capçalera"
            <?php /* 🔴 CANVIAR: big.jpg si el professor dona un altre nom */ ?>
        >
    </div>
 
    <!-- ② Jumbotron — 🔴 CANVIAR títol (aquesta pàgina NOMÉS té h1, sense <p>) -->
    <div class="jumbotron jumbotron-simple">
        <?php /* La classe jumbotron-distribution defineix el background-image al CSS */ ?>
        <div class="container">
            <h1>Beach Bar</h1>   <?php /* 🔴 CANVIAR: títol de la pàgina */ ?>
            <?php /* ✅ DEIXAR sense <p> si el professor no en demana */ ?>
        </div>
    </div>
 
    <!-- ③ WordPress Loop — ✅ DEIXAR TOT aquest bloc -->
    <div class="distribution-content">
        <?php
        /*
         * ✅ DEIXAR: és el loop mínim estàndard de WordPress.
         * Mostra el contingut que has escrit a:
         * Admin → Pàgines → Distribution → editor de blocs
         */
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
 
</main>
 
<?php get_footer(); ?>