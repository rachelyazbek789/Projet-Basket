<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_basket_equipe4;charset=utf8', 'root', '');

// si crea t nouveau club
if (isset($_POST['nomClb']) && isset($_POST['addClb']) && isset($_POST['cpClb']) && isset($_POST['idUti']) && isset($_POST['nomEquip'])) {
    // Ajouter le club à la base de données
    $requete = $bdd->prepare('INSERT INTO clubs (nom_club, adresse, code_postal, gerant, nom_equipe) VALUES (?, ?, ?, ?, ?)');
    $requete->execute(array($_POST['nomClb'], $_POST['addClb'], $_POST['cpClb'], $_POST['idUti'], $_POST['nomEquip']));
}

// si club selec
if (isset($_GET['idClb'])) {
    // Récuples info  du club sélectionné
    $requete = $bdd->prepare('SELECT * FROM clubs WHERE idClb = ?');
    $requete->execute(array($_GET['idClb']));
    $club = $requete->fetch();
}

// si club suppr
if (isset($_POST['supprimer_club'])) {
    // Supprimer le club de la base de données
    $requete = $bdd->prepare('DELETE FROM clubs WHERE idClb = ?');
    $requete->execute(array($_POST['idClb']));
}

?>


    <form method="post">
        <label for="nomClb">Nom du Club :</label>
        <input type="text" id="nomClb" name="nomClb" required><br><br>

        <label for="addClb">Adresse du Club :</label>
        <input type="text" id="addClb" name="addClb" required><br><br>

        <label for="cpClb">Code Postal :</label>
        <input type="text" id="cpClb" name="cpClb" required><br><br>

        <label for="idUti">Nom du gérant:</label>
        <input type="text" id="idUti" name="idUti" required><br><br>

        <label for="nomEquip">Nom de l'équipe:</label>
        <input type="text" id="nomEquip" name="nomEquip" required><br><br>

        <input type="submit" id="submit" name="submit" value="Envoyer">
        <input type="submit" id="'supprimer_club'" name="'supprimer_club'" value="Supprimer">
    </form>

    <!-- Liste  -->
    <h2>Liste des clubs :</h2>
    <ul>
        <?php
        $requete = $bdd->query('SELECT * FROM club');
        while ($club = $requete->fetch()) {
            echo '<li><a href="?idClb=' . $club['idClb'] . '">' . $club['nomClb'] . '</a></li>';
        }
        ?>
    </ul>

    <!-- Affichage-->
<?php
if (isset($club)) {
    echo '<h2>Informations du club :</h2>';
    echo '<p>Nom : ' . $club['nomClbl'] . '</p>';
    echo '<p>Adresse : ' . $club['addClb'] . '</p>';
    echo '<p>Code postal : ' . $club['cpClb'] . '</p>';
    echo '<p>Gérant : ' . $club['idUti'] . '</p>';
    echo '<p>Equipe : ' . $club['nomEquip'] . '</p>';
}