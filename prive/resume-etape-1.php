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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
        <script type="module" src="../javascript/generationCourrierAssembleeConstitutive.js"></script>

        <title>Etape 1-5 - Simul'asso</title>

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

        <aside class='barre-a-gauche'>
            <div>
                <img src='./../images/creation/jauge.png' class='fond-bleu'>
            </div>
            <section>
                <img src='./../images/creation/barre-etape-1.png' class='fond-bleu'>
            </section>
            <section>
                <img src='./../images/creation/cervasso.png' class='fond-bleu''>
            </section>
        </aside>


        <main class="fond-bleu-clair">

            <section class="section has-text-centered">
                <h1>Convocation pour l'assemblée générale constitutive</h1>
            </section>

            <section class="section">
                <p>
                    Votre fichier est prêt !<br>
                    Téléchargez-le et envoyez-le aux personnes membres de votre association.
                </p>
                    <input type="button" value="Télécharger mon fichier" onclick="genererCourrierConvocation()" class="button"/>

                    <br><br>

                <p>
                    Le jour de l’assemblée générale constitutive, vous pourrez remplir les documents suivants mis à
                    votre disposition avec les membres de votre association.

                    <ul class="liste">
                        <li>Procès-verbal</li>
                        <li>Statuts de votre association</li>
                        <li>Liste des dirigeants</li>
                    </ul>

                </p>

                    <button type="submit" class="bouton-bleu hover-blanc">Etape suivante</button>
                    <a href="mes-infos.php" class="texte-blanc petit">Mettre en pause cette étape</a>
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