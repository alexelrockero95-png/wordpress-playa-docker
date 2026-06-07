<?php
/*
 * footer.php
 * ✅ DEIXAR: tota l'estructura HTML i les classes CSS
 * 🔴 CANVIAR: els textos (el professor pot demanar textos concrets)
 */
?>

<footer>
    <div class="container-fluid">

        <?php
        /*
         * ✅ DEIXAR: Lògica de dos textos (complet md+ / curt mòbil).
         * El CSS s'encarrega de mostrar/amagar amb @media.
         *
         * 🔴 CANVIAR: els textos si el professor en dona d'altres.
         * REGLA: footer-full = text complet (visible a md+)
         *        footer-short = text curt centrat (visible a mòbil)
         */
        ?>

        <!-- Text complet (md o superior) -->
        <p class="footer-full">
            La Ola Grande · Platja de Palma, Mallorca · Escola de surf i beach bar
            oberta de juny a setembre · Vine a surfar amb nosaltres!
        </p>

        <!-- Text curt centrat (mòbil) -->
        <p class="footer-short">
            La Ola Grande · Platja de Palma.
        </p>

    </div>
</footer>

<?php wp_footer(); /* ✅ DEIXAR: obligatori per Bootstrap JS i WordPress */ ?>
</body>
</html>