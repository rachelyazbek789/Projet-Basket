
<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_basket_equipe4;charset=utf8', 'root', '');

// si création d'un nouveau club
if (isset($_POST['nomClb']) && isset($_POST['addClb']) && isset($_POST['cpClb']) && isset($_POST['idUti']) && isset($_POST['nomEquip'])) {
// Ajouter le club à la base de données
$requete = $bdd->prepare('INSERT INTO Club (nomClb, addClb, cpClb, idUti, nomEquip) VALUES (?, ?, ?, ?, ?)');
$requete->execute(array($_POST['nomClb'], $_POST['addClb'], $_POST['cpClb'], $_POST['idUti'], $_POST['nomEquip']));
}

// si club sélectionné
if (isset($_GET['idClb'])) {
// Récupérer les informations du club sélectionné
$requete = $bdd->prepare('SELECT * FROM Club WHERE idClb = ?');
$requete->execute(array($_GET['idClb']));
$club = $requete->fetch();
}

// si club supprimé
if (isset($_POST['supprimer_club'])) {
// Supprimer le club de la base de données
$requete = $bdd->prepare('DELETE FROM Club WHERE idClb = ?');
$requete->execute(array($_POST['idClb']));
}

?>


<form method="post"action="FormCreatClub.php"  >
    <link rel="stylesheet" href="formulaire.css">

    <h1>Creation Club</h1>
    <label for="nomClb">Nom du Club :</label>
    <input type="text" id="nomClb" name="nomClb" required><br><br>

    <label for="addClb">Adresse du Club :</label>
    <input type="text" id="addClb" name="addClb" required><br><br>

    <label for="cpClb">Code Postal :</label>
    <input type="text" id="cpClb" name="cpClb" required><br><br>

    <label for="idUti">Nom du gérant :</label>
    <input type="text" id="idUti" name="idUti" required><br><br>

    <label for="nomEquip">Nom de l'équipe :</label>
    <input type="text" id="nomEquip" name="nomEquip" required><br><br>

    <input type="submit" id="submit" name="submit" value="Envoyer">
    <input type="submit" id="supprimer_club" name="supprimer_club" value="Supprimer">
</form>

<!-- Liste  -->
<h2>Liste des clubs :</h2>
<ul>
    <?php
    $requete = $bdd->query('SELECT * FROM Club');
    while ($club = $requete->fetch(PDO::FETCH_ASSOC)) {
        if ($club) {
            echo '<li><a href="?idClb=' . $club['idClb'] . '">' . $club['nomClb'] . '</a></li>';
        }
    }
    ?>
</ul>

<!-- Affichage -->
<?php
if (isset($club)) {
    echo '<h2>Informations du club :</h2>';
    if ($club && $club['nomClb']) {
        echo '<p>Nom : ' . $club['nomClb'] . '</p>';
    }

    if ($club && $club['addClb']) {
        echo '<p>Adresse : ' . $club['addClb'] . '</p>';
    }


    if ($club && $club['cpClb']) {
        echo '<p>Code Postal : ' . $club['cpClb'] . '</p>';
    }


    if ($club && $club['idUti']) {
        echo '<p>Gérant : ' . $club['idUti'] . '</p>';
    }

    if ($club && $club['nomEquip']) {
        echo '<p>Gérant : ' . $club['nomEquip'] . '</p>';
    }


}