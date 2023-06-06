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

        <title>Etape 1-2 - Simul'asso</title>

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
            <h1>Quel sera le nom de votre association ?</h1>
        </section>

        <section class="section">
            <form method="post" action="./../traitements/etape1/tt-etape1-2.php">
                <input type="text" placeholder="Nom de l'association" class="input input-assoc"
                       name="nom-association" required>
                <br>
                <br>
                <button type="submit" class="bouton-bleu hover-blanc">Etape suivante</button>
                <a href="mes-infos.php" class="texte-blanc petit">Mettre en pause cette étape</a>
            </form>
        </section>

        <section class="section">
            <h3>Tips & Astuces</h3>
            <br>

            <h5><strong>Le nom de l'association peut-il contenir des chiffres, des lettres ou des symboles ?</strong></h5>
            <p class="a-droite">Les chiffres et les lettres ainsi que les symboles @, / ou * peuvent être utilisés librement.
                Les symboles monétaires tel que € ne peuvent en revanche être inclus dans le nom de l’association.</p>
            <br>
            <h5 class="a-droite"><strong>Y a-t-il des noms d'associations interdits ?</strong></h5>
            <p class="a-droite">
                L’utilisation de certains noms évoquant une activité réglementée ou un statut particulier est interdite
                aux associations ne réunissant pas les conditions légales requises.
                Par exemple, l’appellation du type « association d’utilité publique » ne peut être utilisée que si
                l’association a réellement été reconnue d’utilité publique tandis que les appellations de type
                « mutuelle » ou « mutualité » sont strictement interdites.
                De plus, il est interdit d'utiliser le terme « fondation » pour une association loi 1901, car ce sont
                deux statuts juridiques différents.

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