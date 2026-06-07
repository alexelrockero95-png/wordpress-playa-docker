<?php
// ✅ DEIXAR: el comentari "Template Name:" a baix — WordPress el llegeix allà
// 🔴 CANVIAR: el nom "Bar" si el professor demana un altre
/* Template Name: Bar */

get_header();
?>
 
<main>
 
    <div class="jumbotron-wrapper">
        <img
            class="big-logo"
            src="<?php echo get_template_directory_uri(); ?>/images/big.jpg"
            alt="Capçalera"
            <?php // 🔴 CANVIAR: big.jpg si el professor dona un altre nom ?>
        >
    </div>
 
    <div class="jumbotron jumbotron-simple">
        <?php // La classe jumbotron-simple defineix el background-image al CSS ?>
        <div class="container">
            <h1>Beach Bar</h1>   <?php // 🔴 CANVIAR: títol de la pàgina ?>
            <?php // ✅ DEIXAR sense <p> si el professor no en demana ?>
        </div>
    </div>
 
    <div class="distribution-content">
        <?php
        // ✅ DEIXAR: és el loop mínim estàndard de WordPress.
        // Mostra el contingut que has escrit a:
        // Admin → Pàgines → Beach Bar → editor de blocs
        
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