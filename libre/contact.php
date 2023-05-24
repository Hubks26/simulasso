<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- obligatoire pour faire du responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="./../javascript/menu.js"></script>

        <title>Nous contacter - Simul'asso</title>

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
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>

    <body>
    <!-- HEADER -->
    <header>
        <?php
        include ('./../pages_fixes/header-libre.php');
        ?>
    </header>

    <!-- MAIN -->
    <main>
        <section class="section has-text-centered fond-bleu">
            <h2>
                Des questions ?
            </h2>
            <h1>
                un formulaire de contact est mis à votre disposition
            </h1>
        </section>

        <form action="./../traitements/tt-contact.php" method="post" class="box">
            <div class="field">
                <label class="label">Votre nom</label>
                <div class="control">
                    <label>
                        <input class="input" type="text" placeholder="Nom">
                    </label>
                </div>
            </div>

            <div class="field">
                <label class="label">Votre prénom</label>
                <div class="control">
                    <label>
                        <input class="input" type="text" placeholder="Prénom">
                    </label>
                </div>
            </div>

            <div class="field">
                <label class="label">Votre adresse mail</label>
                <div class="control has-icons-left">
                    <label>
                        <input class="input" type="email" placeholder="Email">
                    </label>
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Sujet</label>
                <div class="control">
                    <label>
                        <input class="input" type="text" placeholder="Sujet">
                    </label>
                </div>
            </div>

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <label>
                        <textarea class="textarea" placeholder="Textarea"></textarea>
                    </label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox">
                        J'accepte les <a href="#">conditions d'utilisation</a>
                    </label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link">Envoyer</button>
                </div>
            </div>
        </form>
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