<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- obligatoire pour faire du responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="./javascript/menu.js"></script>

    <title>Bienvenue - Simul'asso</title>

      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">

    <!-- framework css - Bulma -->
    <link rel="stylesheet" href="css/bulma.min.css?v=0.9.3">
    <!-- media : screen signifie que cela s'applique à l'écran / print pour l'impression -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css?v=0.0.0">
    <!-- on appelle d'abord la feuille de style bulma avant la notre car les lignes sont exécutées les unes
    après les autres et on veut que ce soit notre feuille qui prime -->
  </head>

  <body>
  <!-- HEADER -->
    <header>
      <section>
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <aside class="petit fond-bleu">
              Commencer à créer votre association, gratuitement et rapidement ! <button type="button" class="button bouton-blanc is-small">Inscription</button>
            </aside>
          </div>
          <div class="navbar-brand">
            <a class="navbar-item" href="./index.php">
              <figure>
                <a href="./index.php"><img src="./images/logos/logo_bleu_fond_blanc.png" width="112" height="28" alt="Simulasso"></a>
              </figure>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>

            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item" href="./libre/services.php">
                  Nos services
                </a>

                <a class="navbar-item">
                  Les actualités
                </a>

                <a class="navbar-item">
                  Nous découvrir
                </a>

                <a class="navbar-item">
                  Nous contacter
                </a>

                <a class="navbar-item fond-bleu">
                  Connexion
                </a>
              </div>
            </div>
          </div>
        </nav>
      </section>
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

        <section class="section columns fond-bleu has-text-centered">
          <div class="column">
            <h3>
              Simul'asso, c'est quoi
            </h3>
            <p>
              Vous ne savez pas par où commencer pour créer votre
              association ? Simul'asso est la solution !
              Nous vous épaulons dans votre nouvelle aventure...
            </p>
            <button type="button" class="button bouton-blanc is-small">Mieux connaître Simul'Asso</button>
          </div>

          <div class="column">
            <h3>
              Comment créer son association
            </h3>
            <p>
              Nous vous guidons dans toutes les étapes de la création
              de votre association, depuis l'élaboration des statuts
              jusqu'à l'enregistrement auprès de la préfecture.
            </p>
            <button type="button" class="button bouton-blanc is-small">Je souhaite créer mon association</button>
          </div>

          <div class="column">
            <h3>
              Des questions
            </h3>
            <p>
              Un formulaire de contact est mis à votre disposition.
              Si vous avez un doute ou une inquiétude, nos conseillers sont là pour
              vous répondre !
            </p>
            <button type="button" class="button bouton-blanc is-small">Contacter Simul'asso</button>
          </div>

          <div class="column">
            <h3>
              Vous souhaitez suivre l'actualité
            </h3>
            <p>
              Nous mettons à votre disposition toute l’actualité
              concernant les associations, n’hésitez pas à y jeter un coup d’œil !
            </p>
            <button type="button" class="button bouton-blanc is-small">Voir les actualités</button>
          </div>
        </section>
      </article>


      <!-- https://codepen.io/Nalid/details/abdaqvR -->



      <aside>
        <section class="section">
          <div class="wrapper">
            <div data-carousel>
              <ul class="slide__list Wallop-list">
                <li class="slide__item Wallop-item Wallop-item--current">
                  <h2 class="slide__heading">Carine Millot</h2>
                  <blockquote>
                    <p class="slide__quote">Très bonne application en ligne pour l’aide à l’administration de son
                      association. L'équipe Simul’asso est super et très réactive ce qui est vraiment
                      un plus pour les dirigeants et bénévoles investis dans leur association.</p>
                    <div class="Stars slide__cite" style="--rating: 5;"></div>
                  </blockquote>
                </li>
                <li class="slide__item Wallop-item">
                  <h2 class="slide__heading">Nathalie Gourdeau</h2>
                  <blockquote>
                    <p class="slide__quote">Très bonne application en ligne pour l’aide à l’administration de son
                      association. L'équipe Simul’asso est super et très réactive ce qui est vraiment
                      un plus pour les dirigeants et bénévoles investis dans leur association.</p>
                    <div class="Stars slide__cite" style="--rating: 4;"></div>
                  </blockquote>
                </li>
              </ul>
              <button class="button--prev Wallop-buttonPrevious buttonR" title="previous">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.9 50.2"><path d="M25.1 50.2L0 25.1 25.1 0l2.8 2.8L5.7 25.1l22.2 22.2z"/></svg>
              </button>
              <button class="button--next Wallop-buttonNext buttonR" title="next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.9 50.2"><path d="M25.1 50.2L0 25.1 25.1 0l2.8 2.8L5.7 25.1l22.2 22.2z"/></svg>
              </button>
            </div>
            <script src="./javascript/carousel.js"></script>
          </div>
        </section>
      </aside>


      <aside class="section fond-orange has-text-centered">
        <h4>
          <a href="#" class="lien-blanc titre">
            Retrouvez toutes les informations du monde associatif !
          </a>
        </h4>
          <section class="division-section">
            <figure>
              <img src="./images/homepage/image_actu.png" alt="actu">
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
              <button type="button" class="button bouton-bleu is-small">
                En savoir plus
              </button>
            </section>
          </section>
      </aside>

      <aside class="section has-text-centered">
        <p class="citation">
          “ Si le bénévolat n’est pas payé ce n’est pas parce qu’il ne vaut
          rien, mais parce qu’il n’a pas de prix.”
        </p>
        <p class="titre">
          <strong class="texte-bleu">Sherry Anderson</strong>
        </p>
      </aside>

      <article class="section fond-bleu has-text-centered">
        <h3>
          Des associations qui ont du sens, avec simul’asso !
        </h3>
        <p class="actu-homepage">
          <strong class="texte-blanc">Vous avez un projet associatif en tête et vous cherchez un accompagnement sur mesure pour le réaliser ? Vous
            êtes au bon endroit !</strong><br>
          En créant un compte sur notre site, vous aurez accès à des <strong>outils performants et intuitifs</strong> pour vous aider à mener à bien
          votre projet associatif. Grâce à notre expertise et à notre expérience, nous sommes en mesure de <strong>vous accompagner
            dans toutes les étapes de la création et de la gestion de votre association</strong>, de la rédaction des statuts à la gestion
          administrative, en passant par la recherche de financements et la communication.<br>
          Alors n'hésitez plus et créez votre compte dès maintenant ! Rejoignez notre <strong>communauté dynamique</strong> d'associations
          engagées et bénéficiez d'un accompagnement sur mesure pour réaliser vos projets associatifs. Nous avons hâte de vous
          aider à concrétiser vos idées et à faire avancer vos projets !
        </p>
        <button type="button" class="button is-small bouton-blanc">
          Je souhaite m'inscrire
        </button>
      </article>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="columns">
        <!-- Column 1 -->
        <div class="column">

          <figure>
            <img src="./images/logos/logo_bleu_fond_blanc.png" alt="simulasso">
          </figure>

        </div>

        <!-- Column 2 -->
        <div class="column">
          <h4 class="bd-footer-title
                 has-text-weight-medium
                 has-text-justify">
            Nous suivre
          </h4>

          <p class="bd-footer-link">
            <a href="https://">
                <span class="icon-text">
                  <img src="./images/footer/facebook_logo.png" alt="facebook" width="40">
                </span>
            </a>
            <a href="https://">
                <span class="icon-text">
                  <img src="./images/footer/instagram_logo.png" alt="instagram" width="40">
                </span>
            </a>
            <a href="https://">
                <span class="icon-text">
                  <img src="./images/footer/linkedin_logo.png" alt="linkedin" width="40">
                </span>
            </a>
            <a href="https://">
                <span class="icon-text">
                  <img src="./images/footer/tiktok_logo.png" alt="tiktok" width="40">
                </span>
            </a>
            <a href="https://">
                <span class="icon-text">
                  <img src="./images/footer/twitter_logo.png" alt="twitter" width="40">
                </span>
            </a>
            <a href="https://">
                <span class="icon-text">
                  <img src="./images/footer/youtube_logo.png" alt="youtube" width="40">
                </span>
            </a>
            <br />
          </p>

        </div>

        <!-- Column 3 -->
        <div class="column">
          <h4 class="bd-footer-title
                 has-text-weight-medium
                 has-text-justify">
            Informations légales
          </h4>

          <p class="bd-footer-link">
            <a href="https://">
              <span class="icon-text">
                <span>Mentions légales</span>
              </span>
            </a>
            <br />
            <a href="https://">
              <span class="icon-text">
                <span>Confidentialité</span>
              </span>
            </a>
          </p>
        </div>

        <!-- Column 4 -->
        <div class="column">
          <h4 class="bd-footer-title
                 has-text-weight-medium
                 has-text-justify">
            Aide
          </h4>

          <p class="bd-footer-link">
            <a href="https://">
              <span class="icon-text">
                <span>Formulaire de contact</span>
              </span>
            </a>
            <br />
            <a href="https://">
              <span class="icon-text">
                <span>Chatbot</span>
              </span>
            </a>
          </p>
        </div>
      </div>
    </footer>
    <aside class="is-fixed-bottom fond-bleu has-text-centered petit">
      © Pic'asso 2023 - Tous droits réservés
    </aside>
  </body>
</html>