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
        <script src="../javascript/menu.js"></script>

        <title>Etape 1-1 - Simul'asso</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- framework css - Bulma -->
        <link rel="stylesheet" href="../css/bulma.min.css?v=0.9.3">
        <!-- media : screen signifie que cela s'applique à l'écran / print pour l'impression -->
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css?v=0.0.0">
        <!-- on appelle d'abord la feuille de style bulma avant la notre car les lignes sont exécutées les unes
        après les autres et on veut que ce soit notre feuille qui prime -->
    </head>

    <body>
    <!-- HEADER -->
    <header>
        <?php
        include('./../pages_fixes/header-prive.php');
        ?>
    </header>

    <?php
    include('./../pages_fixes/barre-laterale.php');
    ?>

    <!-- MAIN -->
    <main class="fond-bleu-clair">

        <section class="section has-text-centered">
            <h1>Idée de l'association</h1>
        </section>

        <section class="section">
            <p class="a-droite">
                L'idée d'une association est importante, car elle constitue la raison d'être de l'association.
                Elle détermine les objectifs et les activités que l'association va mener.
                C'est donc un élément crucial pour la création et la réussite d'une association.<br><br>
                L’objectif de cette étape est de :
            </p>

            <p class="a-droite">
                <ul class="liste">
                    <li>Décider du nom de votre association</li>
                    <li>Connaître l’activité principale (objet social)</li>
                    <li>Décider de de votre domiciliation</li>
                </ul>
            </p>


            <p class="a-droite"><br><br>Durée de l'étape : environ 15 minutes</p>

        </section>
        <section class="section fond-bleu">
            <a href="etape1-2.php">
                <button type="button" class="bouton-blanc">C'est parti !</button>
            </a>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <?php
        include('./../pages_fixes/footer.php');
        ?>
    </footer>
    <aside class="is-fixed-bottom fond-bleu has-text-centered petit">
        © Pic'asso 2023 - Tous droits réservés
    </aside>
    </body>
</html>