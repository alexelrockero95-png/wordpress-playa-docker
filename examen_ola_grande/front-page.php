<?php
// front-page.php — Pàgina principal
//
// ✅ DEIXAR: l'estructura HTML (jumbotron-wrapper, cards-container, card-item)
// 🔴 CANVIAR: imatges, títols, textos i URLs dels botons
//
// WordPress el carrega automàticament si assignes "Home" a Ajustes -> Lectura.

get_header();
?>

<main>
<div class="jumbotron-wrapper">
        <img
            class="big-logo"
            src="<?php echo get_template_directory_uri(); ?>/images/big.jpg"
            alt="Capçalera"
            <?php // 🔴 CANVIAR: big.jpg si la imatge té un altre nom ?>
        >
    </div>

    <div class="jumbotron jumbotron-index">
        <?php // jumbotron-index → correspon a .jumbotron-index al CSS ?>
        <div class="container">
            <h1>La Ola Grande</h1>     <?php // 🔴 CANVIAR TÍTOL ?>
            <p>Ride the perfect wave</p>     <?php // 🔴 CANVIAR TEXT ?>
        </div>
    </div>

    <div class="cards-container">

        <div class="card-item">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/surf.jpg"
                alt="lessons"
            >
            <?php // CORREGIDO ARRIBA: de surfer.jpg a surf.jpg ?>
            <div class="card-body">
                <h5 class="card-title">Surf Lessons</h5>
                <p class="card-text">Learn to surf with our expert instructors</p>
                <a
                    href="<?php echo esc_url( home_url( '/lessons' ) ); ?>"
                    class="btn-blue"
                >Book a lesson</a>
            </div>
        </div>

        <div class="card-item">
            <?php // ✅ DEIXAR: nth-child(2) té margin-top: 20px al CSS ?>
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/bar.jpg"
                alt="bar"
            >
            <div class="card-body">
                <h5 class="card-title">Beach Bar</h5>
                <p class="card-text">Enjoy cocktails with stunning ocean views</p>
                <a
                    href="<?php echo esc_url( home_url( '/bar' ) ); ?>"
                    class="btn-blue"
                >See our menu</a>
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>