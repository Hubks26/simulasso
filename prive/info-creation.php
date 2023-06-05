<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- obligatoire pour faire du responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="./../javascript/menu.js"></script>

        <title>Créer mon association - Simul'asso</title>

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
    <main class="fond-bleu-clair">
        <section class="section has-text-centered">
            <h1>Quelques infos avant de <strong class="texte-bleu">démarrer la création</strong> de votre association</h1>
        </section>

        <section class="section">
            <div class="columns">
                <div class="column has-text-centered">
                    <h3>La jauge</h3>
                    <img src="./../images/creation/jauge.png" class="petite-image">
                    <p>La jauge va vous permettre de vous situer durant chacune des étapes ! A chaque nouvelle étape, une
                        nouvelle jauge apparaît.</p>
                </div>

                <div class="column has-text-centered">
                    <h3>Besoin d'aide ?</h3>
                    <img src="./../images/creation/cervasso.png" class="petite-image">
                    <p>Un chatbot, un formulaire de contact et une foire aux questions sont mis à votre disposition !</p>
                </div>

                <div class="column has-text-centered">
                    <h3>Les étapes</h3>
                    <img src="./../images/creation/barre-progression.png" class="petite-image">
                    <p>Si la jauge est à 100%, alors vous avez passé une étape ! Vous le remarquerez grâce à ce
                        baromètre d’avancement.</p>
                </div>

                <div class="column has-text-centered">
                    <h3>Le temps ?</h3>
                    <img src="./../images/creation/horloge.png" class="petite-image">
                    <p>Pas de panique ! A chaque étape, vous pouvez enregistrer les renseignements et des documents.
                        Ils atterriront dans votre espace privé.</p>
                </div>
            </div>
        </section>

        <section class="section has-text-centered fond-bleu">
            <a href="etape1-1.php">
                <button class="button bouton-blanc">Démarrer la création</button>
            </a>
        </section>

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