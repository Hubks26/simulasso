<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- obligatoire pour faire du responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="./../javascript/menu.js"></script>

        <title>Les actualités - Simul'asso</title>

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

            <section class="section fond-blanc has-text-centered">
                <p>
                    <strong class="texte-bleu">Nous sommes ravis de vous présenter les dernières nouvelles et tendances dans le monde des
                        associations.</strong> <br><br>Cette section est dédiée à la présentation de reportages, d'interviews, d'analyses
                    et de conseils pratiques pour les responsables associatifs et tous ceux qui sont intéressés par
                    les dynamiques du monde associatif.
                </p>
                <p>
                    Nous nous efforçons de fournir des informations pertinentes et à jour sur les questions qui
                    comptent pour vous et votre organisation. Que vous soyez bénévole, membre, dirigeant ou simplement
                    curieux, nous espérons que cette section vous sera utile et enrichissante.<br><br>
                    <strong class="texte-bleu">Rejoignez-nous pour découvrir le monde fascinant et varié des associations !</strong>
                </p>
            </section>
            <section class="section fond-orange has-text-centered">
                <div class="division-section">
                    <figure>
                        <img src="./../images/homepage/image_actu.png" alt="actu">
                    </figure>
                    <section>
                        <p class="titre">
                            C'est l'une des mesures majeures de la loi dite
                            "séparatisme" d'août 2021
                        </p>
                        <p class="actu-homepage">
                            Les associations bénéficiant de subventions
                            publiques doivent respecter un Contrat
                            d'Engagement Républicain. Des voix s'élèvent pour
                            dénoncer une instrumentalisation politique du
                            monde associatif.
                        </p>
                        <button type="button" class="button bouton-blanc is-small">
                            En savoir plus
                        </button>
                    </section>
                </div>
            </section>

            <section class="section fond-bleu has-text-centered">
                <div class="division-section">
                    <section>
                        <p class="titre">
                            C'est l'une des mesures majeures de la loi dite
                            "séparatisme" d'août 2021
                        </p>
                        <p class="actu-homepage">
                            Les associations bénéficiant de subventions
                            publiques doivent respecter un Contrat
                            d'Engagement Républicain. Des voix s'élèvent pour
                            dénoncer une instrumentalisation politique du
                            monde associatif.
                        </p>
                        <button type="button" class="button bouton-blanc is-small">
                            En savoir plus
                        </button>
                    </section>
                    <figure>
                        <img src="./../images/homepage/image_actu.png" alt="actu">
                    </figure>
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