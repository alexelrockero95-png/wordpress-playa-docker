<?php
/* Template Name: Lessons */

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

    <div class="jumbotron jumbotron-galeria">
        <?php // La classe jumbotron-galeria defineix el fons al CSS ?>
        <div class="container">
            <h1>La Ola Grande</h1>     <?php // 🔴 CANVIAR TÍTOL ?>
            <p>Surf Lessons</p>        <?php // 🔴 CANVIAR TEXT ?>
        </div>
    </div>

    <div class="lessons-gallery">
        <?php
        // 🔴 CANVIAR VARIABLES:
        // $prefix = lletra/text base dels fitxers
        // $total  = nombre d'imatges
        // $ext    = extensió
        
        $prefix = 's';
        $total  = 6;
        $ext    = 'jpg';

        // ✅ DEIXAR: el bucle for i get_template_directory_uri()
        for ( $i = 1; $i <= $total; $i++ ) :
        ?>
            <img
                src="<?php echo get_template_directory_uri() . '/images/' . $prefix . $i . '.' . $ext; ?>"
                alt="Lesson <?php echo $i; ?>"
            >
        <?php endfor; ?>
    </div>

</main>

<?php get_footer(); ?>