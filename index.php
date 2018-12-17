<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 5 exercice 2</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 5 exercice 2</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Avec le tableau de l'exercice 1 (ci-dessous), afficher la valeur de la troisième ligne de ce tableau.</p>
                    <li>Janvier</li>
                    <li>Février</li>
                    <li>Mars</li>
                    <li>Avril</li>
                    <li>Mai</li>
                    <li>Juin</li>
                    <li>Juillet</li>
                    <li>Aout</li>
                    <li>Septembre</li>
                    <li>Octobre</li>
                    <li>Novembre</li>
                    <li>Décembre</li>
                </div>
                <?php
                $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                ?>
                <div align="center">
                    <?= "<p>Voici la valeur de la troisième ligne du tableau : " . $months[2] . ".</p>"; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

