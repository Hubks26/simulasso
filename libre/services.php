<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- obligatoire pour faire du responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="./../javascript/menu.js"></script>

        <title>Nos services - Simul'asso</title>

        <link rel="icon" href="/favicon.ico">
        <link rel="icon" href="/icon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="manifest" href="/manifest.webmanifest">

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
        include ('./../pages_fixes/header-libre.php');
        ?>
    </header>

    <!-- MAIN -->
    <main>
        <article>
            <section class="section section1 has-text-centered" id="fond-photo">
                <h2>
                    Simul'asso, plus qu'un simple outil,
                </h2>
                <h1>
                    une aide à la création d'association
                </h1>
                <button type="button" class="button bouton-bleu">Je m'inscris</button>
            </section>

            <section class="section fond-bleu has-text-centered">
                <p>
                    Créer une association peut sembler intimidant, mais <strong>Simul'asso</strong> est là pour vous
                    accompagner tout au long du processus. Nous vous offrons des <strong>conseils pratiques</strong>, des <strong>outils</strong>, des
                    <strong>ressources</strong> pour vous aider à élaborer des statuts, à vous enregistrer et à gérer votre association
                    de manière efficace.
                </p>
                <button type="button" class="button bouton-blanc">Créer mon association</button>
            </section>

            <section class="section columns fond-orange has-text-centered">
                <div class="column">
                    <h3>
                        <strong class="majuscule">Simplicité</strong>
                    </h3>
                    <p>
                        Les démarches deviennent simples :
                        <ul class="liste-ignore has-text-left">
                            <li>Remplissez un questionnaire simplifié et 100% en ligne</li>
                            <li>Retrouvez tous vos documents dématérialisés sur votre espace privé</li>
                        </ul>
                    </p>
                </div>

                <div class="column">
                    <h3>
                        <strong class="majuscule">Rapidité</strong>
                    </h3>
                    <p>
                        Vous réalisez votre projet plus rapidement :
                    <ul class="liste-ignore has-text-left">
                        <li>Tout est centralisé, plus de temps perdu sur internet</li>
                        <li>Vous êtes guidés tout au long du processus</li>
                    </ul>
                    </p>
                </div>

                <div class="column">
                    <h3>
                        <strong class="majuscule">Gratuité</strong>
                    </h3>
                    <p>
                        Faites des économies :
                    <ul class="liste-ignore has-text-left">
                        <li>Des prix à partir de 0€ et jusqu'à 0€, nos services sont intégralement gratuits</li>
                    </ul>
                    </p>
                </div>

                <div class="column">
                    <h3>
                        <strong class="majuscule">Sérénité</strong>
                    </h3>
                    <p>
                        Confiez votre projet à nos experts :
                    <ul class="liste-ignore has-text-left">
                        <li>Nos experts vous accompagnent dans votre démarche</li>
                        <li>Ils sont disponibles et se chargent de tout</li>
                    </ul>
                    </p>
                </div>
            </section>
        </article>

        <aside class="section has-text-centered">
            <p class="citation">
                “ Si le bénévolat n’est pas payé ce n’est pas parce qu’il ne vaut
                rien, mais parce qu’il n’a pas de prix.”
            </p>
            <p class="titre">
                <strong class="texte-bleu">Sherry Anderson</strong>
            </p>
        </aside>
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