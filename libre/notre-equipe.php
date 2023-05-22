<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- obligatoire pour faire du responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="./../javascript/menu.js"></script>

    <title>Notre équipe - Simul'asso</title>

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
                Qui se cache derrière Simul'Asso ?
            </h2>
            <h1>
                nous découvrir
            </h1>
        </section>

        <section class="section fond-blanc has-text-centered">
            <p>
                Vous avez toujours rêvé de créer votre propre association, mais vous ne savez pas par où
                commencer ? Ne cherchez plus, Simul'asso est là pour vous aider à réaliser votre rêve !
                Nous vous offrons un accompagnement personnalisé dans votre nouvelle aventure associative.
            </p>
            <p>
                Simul'asso, c'est bien plus qu'un simple site internet. C'est une plateforme qui simplifie et
                rend accessible la création d'associations de Loi 1901. Grâce à notre expertise et notre
                savoir-faire, vous pourrez vous concentrer sur l'essentiel : la réalisation de vos projets et
                la concrétisation de vos passions.
            </p>
            <p>
                <strong class="texte-bleu">Rejoignez-nous dès maintenant et lancez-vous dans l'aventure associative de vos rêves grâce à
                    Simul'asso !</strong>
            </p>
            <button type="button" class="button bouton-bleu">Je m'inscris</button>
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