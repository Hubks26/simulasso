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
                <a type="button" class="button bouton-bleu" href="./../libre/inscription.php">Je m'inscris</a>
            </section>
            <section class="section fond-blanc has-text-centered">
                <div class="columns">
                    <div class="column card fond-orange">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="./../images/equipe/portrait_alicia.png" alt="Alicia">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <h3>Alicia VANHOVE DEBURE</h3>
                                    <p>Gestion de projet & Développement fullstack</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column card fond-bleu">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="./../images/equipe/portrait_youssef.png" alt="Youssef">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <h3>Youssef BEREHILI</h3>
                                    <p>Marketing & Développement front-end</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column card fond-orange">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="./../images/equipe/portrait_ludivine.png" alt="Ludivine">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <h3>Ludivine REPIR</h3>
                                    <p>Communication & Juridique </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column card fond-bleu">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="./../images/equipe/portrait_aaron.png" alt="Aaron">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <h3>Aaron SAADA</h3>
                                    <p>Graphisme & Développement front-end </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column card fond-orange">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="./../images/equipe/portrait_lou-anne.png" alt="Lou-Anne">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <h3>Lou-Anne ROUJAS</h3>
                                    <p>Graphisme </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <section class="section columns fond-equipe has-text-centered">
            <div class="column">
                <h3>
                    <strong class="majuscule texte-bleu">Accessibilité</strong>
                </h3>
                <p>
                    Notre plateforme est accessible à tous et gratuite, où que vous soyez, notre aide et nos services
                    sont disponibles en toute circonstance. Avec notre plateforme, travaillez où vous voulez, quand
                    vous voulez et comme vous voulez.
                </p>
            </div>

            <div class="column">
                <h3>
                    <strong class="majuscule texte-bleu">Communication</strong>
                </h3>
                <p>
                    Nous mettons à votre disposition un chatbot, un formulaire de contact, ainsi qu'une foire aux
                    questions pour répondre à toutes vos interrogations. Que ce soit pour une question technique ou
                    un besoin d'assistance, nous sommes là pour vous aider. N'hésitez pas à nous contacter et à
                    utiliser nos outils pour un service personnalisé et de qualité.
                </p>
            </div>

            <div class="column">
                <h3>
                    <strong class="majuscule texte-bleu">Performances</strong>
                </h3>
                <p>
                    Grâce à notre plateforme intuitive et à jour sur les actualités, vous pourrez créer votre
                    association en toute simplicité et avec succès. Alors n'attendez plus pour réaliser votre projet
                    et lancez-vous dès maintenant avec notre solution tout-en-un !
                </p>
            </div>
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