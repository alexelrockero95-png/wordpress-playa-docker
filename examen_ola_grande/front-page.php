<?php
/*
 * front-page.php — Pàgina principal
 *
 * ✅ DEIXAR: l'estructura HTML (jumbotron-wrapper, cards-container, card-item)
 * 🔴 CANVIAR: imatges, títols, textos i URLs dels botons
 *
 * WordPress el carrega automàticament si a:
 * Configuració → Lectura → Pàgina principal estàtica → selecciones "Home"
 */
get_header();
?>

<main>

    <?php /* ① Imatge capçalera (SOBRE el jumbotron) — ✅ DEIXAR estructura */ ?>
    <div class="jumbotron-wrapper">
        <img
            class="big-logo"
            src="<?php echo get_template_directory_uri(); ?>/images/big.jpg"
            alt="Capçalera"
            <?php /* 🔴 CANVIAR: big.jpg si la imatge té un altre nom */ ?>
        >
    </div>

    <?php /* ② Jumbotron — 🔴 CANVIAR textos i classe CSS del background */ ?>
    <div class="jumbotron jumbotron-index">
        <?php /* jumbotron-index → correspon a .jumbotron-index { background-image: ... } al CSS */ ?>
        <div class="container">
            <h1>Nuestra Ola mallorquina</h1>     <?php /* 🔴 CANVIAR */ ?>
            <p>Bienvenidos a nuestra ola</p>     <?php /* 🔴 CANVIAR */ ?>
        </div>
    </div>

    <?php /* ③ Cards Flexbox — ✅ DEIXAR estructura, 🔴 CANVIAR contingut */ ?>
    <div class="cards-container">

        <!-- Card 1 — 🔴 CANVIAR: imatge, títol, text, URL del botó -->
        <div class="card-item">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/surfer.jpg"
                alt="lessons"
            >
            <div class="card-body">
                <h5 class="card-title">Lecciones de surf</h5>
                <p class="card-text">¡Aprende a surfear con nuestros expertos!</p>
                <a
                    href="<?php echo esc_url( home_url( '/products' ) ); ?>"
                    class="btn-blue"
                >Reservar lección aquí</a>
                <?php
                /*
                 * ✅ DEIXAR: home_url('/slug') — posa el slug de la pàgina de destí
                 * 🔴 CANVIAR: '/products' pel slug que hagi creat el professor
                 */
                ?>
            </div>
        </div>

        <!-- Card 2 — 🔴 CANVIAR: imatge, títol, text, URL del botó -->
        <div class="card-item">
            <?php /* ✅ DEIXAR: nth-child(2) té margin-top: 15px al CSS (mòbil) */ ?>
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/bar.jpg"
                alt="bar"
            >
            <div class="card-body">
                <h5 class="card-title">Beach Bar</h5>
                <p class="card-text">Disfruta de nuestros cockteles con las preciosas vistas del oceano mediterraneo!</p>
                <a
                    href="<?php echo esc_url( home_url( '/distribution' ) ); ?>"
                    class="btn-blue"
                >Mira nuestro menú</a>
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>