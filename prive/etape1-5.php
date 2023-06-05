<!doctype html>
<html lang="fr" dir="ltr" class="has-navbar-fixed-top">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- obligatoire pour faire du responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="../javascript/menu.js"></script>

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

    <?php
    include('./../pages_fixes/barre-laterale.php');
    ?>

    <!-- MAIN -->
    <main class="fond-bleu-clair">

        <section class="section has-text-centered">
            <h1>Convocation pour l'assemblée générale constitutive</h1>
        </section>

        <section class="section">
            <p>
                Nous allons générer pour vous une convocation afin de réunir les membres de votre équipe pour
                l’assemblée générale consécutive. Afin d’être le plus précis possible, veuillez remplir les
                informations suivantes.
            </p>
            <form method="post" action="./../traitements/etape1/tt-etape1-5.php">
                <input type="date" class="input input-assoc" name="date-assemble-const" id="datepicker" required>
                <br><br>
                <input type="time" class="input input-assoc" name="heure-assemble-const" required>
                <br><br>

                <input type="text" class="input-assoc input" id="adresse" placeholder="Adresse"
                       name="adresse-demandeur" required>

                <br>
                <br>

                <button type="submit" class="bouton-bleu hover-blanc">Etape suivante</button>
                <a href="mes-infos.php" class="texte-blanc petit">Mettre en pause cette étape</a>
            </form>
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

    <script type="text/javascript">
        let today = new Date();
        let dd = today.getDate();
        let mm = today.getMonth() + 1;
        let yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datepicker").setAttribute("min", today);
    </script>
</html>