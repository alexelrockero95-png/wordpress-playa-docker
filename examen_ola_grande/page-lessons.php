<?php
/*
 *
 * ✅ DEIXAR: el comentari "Template Name:" — WordPress el llegeix aquí
 * 🔴 CANVIAR: el nom "Products" si el professor demana un altre
 *
 * Template Name: Lessons
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

    <!-- ② Jumbotron — 🔴 CANVIAR textos -->
    <div class="jumbotron jumbotron-products">
        <?php /* La classe jumbotron-products defineix el background-image al CSS */ ?>
        <div class="container">
            <h1>Nuestra ola mallorquina</h1>     <?php /* 🔴 CANVIAR */ ?>
            <p>Nuestras lecciones de surf</p>              <?php /* 🔴 CANVIAR */ ?>
        </div>
    </div>

    <!-- ③ Galeria CSS Grid — ✅ DEIXAR lògica, 🔴 CANVIAR variables -->
    <div class="lessons-gallery">
        <?php
        /*
         * 🔴 CANVIAR:
         *   $prefix   = lletra/text base dels fitxers (ara 'p' → p1.jpg, p2.jpg...)
         *   $total    = nombre d'imatges (ara 9)
         *   $ext      = extensió (ara 'jpg')
         *
         * ✅ DEIXAR: el bucle for i get_template_directory_uri()
         */
        $prefix = 's';
        $total  = 6;
        $ext    = 'jpg';

        for ( $i = 1; $i <= $total; $i++ ) :
        ?>
            <img
                src="<?php echo get_template_directory_uri() . '/images/' . $prefix . $i . '.' . $ext; ?>"
                alt="Product <?php echo $i; ?>"
            >
        <?php endfor; ?>
    </div>

</main>

<?php get_footer(); ?>