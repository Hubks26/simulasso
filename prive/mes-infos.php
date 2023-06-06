<?php
session_start(); // Démarrer la session
?>
<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- obligatoire pour faire du responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="./../javascript/menu.js"></script>

        <title>Mon espace personnel - Simul'asso</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- framework css - Bulma -->
        <link rel="stylesheet" href="./../css/bulma.min.css?v=0.9.3">
        <!-- media : screen signifie que cela s'applique à l'écran / print pour l'impression -->
        <link rel="stylesheet" type="text/css" media="screen" href="./../css/main.css?v=0.0.0">
        <!-- on appelle d'abord la feuille de style bulma avant la notre car les lignes sont exécutées les unes
        après les autres et on veut que ce soit notre feuille qui prime -->
    </head>

    <body>
    <!-- HEADER -->
    <header>
        <?php
        include ('./../pages_fixes/header-prive.php');
        ?>
    </header>

    <!-- MAIN -->
    <main>
        <article>
            <section class="section section1 has-text-centered" id="fond-photo">
                <h2>
                    Reprenez vos démarches quand vous le souhaitez !
                </h2>
                <h1>
                    Bienvenue sur votre espace personnel
                </h1>
            </section>

            <section class="section fond-blanc has-text-centered">
                <img src="./../images/banque_image/dossiers.png" class="petite-image">
                <p>
                    <a href="resume-etape-1.php">Vous vous êtes arrêté à l'étape 1 - Reprendre ma démarche</a>
                </p>


            </section>

            <section class="section fond-orange has-text-centered">
                <h3>Retrouvez tous vos documents ici !</h3>

                <p>Vous pouvez non seulement trouver tous les documents vierges nécessaires à la création et à la
                    gestion de votre association, mais également en déposer de nouveaux et en télécharger d'autres
                    en toute simplicité. Avec notre interface intuitive et conviviale, vous pourrez facilement
                    accéder à tous vos documents et les mettre à jour en temps réel.</p>

                <a href="resume-etape-1.php">
                    <button type="button" class="bouton-blanc">
                        Télécharger la convocation à l'assemblée générale constitutive
                    </button>
                </a>
            </section>


        </article>



    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <?php
        include ('./../pages_fixes/footer.php');
        ?>
    </footer>
    <aside class="is-fixed-bottom fond-bleu has-text-centered petit">
        © Pic'asso 2023 - Tous droits réservés
    </aside>
    </body>
</html>