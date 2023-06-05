<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- obligatoire pour faire du responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="../javascript/menu.js"></script>
        <script src="./../javascript/adresse.js"></script>

        <title>Etape 1-4 - Simul'asso</title>

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
            <h1>Qui effectue les démarches de création ?</h1>
        </section>

        <section class="section">
            <form method="post" action="./../traitements/etape1/tt-etape1-3.php">
                <input type="text" placeholder="Nom" class="input input-assoc"
                       name="nom-demandeur" required>
                <br><br>
                <input type="text" placeholder="Prénom" class="input input-assoc"
                       name="prenom-demandeur" required>
                <br>
                <br>

                <input type="text" class="input-assoc input" id="adresse" placeholder="Saisissez une adresse">
                <div id="selection" style="display: none;"></div>

                <br>
                <br>

                <button type="submit" class="bouton-bleu hover-blanc">Etape suivante</button>
                <a href="mes-infos.php" class="texte-blanc petit">Mettre en pause cette étape</a>
            </form>
        </section>

        <section class="section">
            <h3>Tips & Astuces</h3>
            <br>

            <h5><strong>Qu’est-ce que l’activité de l’association ?</strong></h5>
            <p class="a-droite">L’activité correspond aux principales activités que l’association envisage d’exercer.
                Une association peut avoir plusieurs objets ou buts distincts.<br>
                Exemples : sport, culture, arts, loisirs, santé, humanitaire, éducation
            </p>

            <br>
            <br>

            <h5 class="a-droite"><strong>L’activité : à quoi cela sert-il ?</strong></h5>
            <p class="a-droite">
                C’est à partir de l’activité que l’on apprécie l’étendue des pouvoirs des dirigeants, la nécessité
                de modifier les statuts en cas de changement d’activité et que l’INSEE détermine le code APE de
                l’association (utile pour la détermination de la convention collective applicable).
            </p>
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