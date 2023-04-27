<?php

require_once 'src/traits/traitFormCreaClub.php4';

$bdd = new PDO("mysql:dbname=projet_basket_equipe4;host=localhost;port=3306;charset=UTF8");



/*'<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer le club</title>
    <link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
<h1>Liste des clubs</h1>
<ul>
    <?php
    $req = $bdd->query('SELECT * FROM club');
    while ($club = $req->fetch()) {
        echo '<li><a href="?idClb=' . $club['idClb'] . '">' . $club['nomClb'] . '</a></li>';
    }
    ?>
</ul>
</body>';*/


//???????? Je comprend pas , j' essaie de creer une liste de likens  representés par nom de club