

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un match</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/formulaire.css">
</head>
<body>

<div class="hero">
    <nav>
        <h2 class="logo">Bask'<span>Ort</span></h2>
        <ul>
            <li><a href="Accueil.php">Home</a></li>
            <li><a href="../../src/view/écran_création_compétition.php">Compétition</a></li>
            <li><a href="../../src/view/écran_création_matcch.php">Match</a></li>
            <li><a href="../../src/view/écran_création_joueur.php">Joueur</a></li>
            <li><a href="Formulaire.html">Profil</a></li>
            <li><a href="#">Inscription</a></li>
        </ul>
    </nav>
</div>
<br>
<h1>Création d'un Joueur</h1>

<form action="../traits/traitCreateMatcch.php" method="post">

    <label for="nom">Nom du Joueur:</label>
    <input type="text" name="nom" required><br>

    <label for="prénom">Prénom du Joueur</label>
    <input type="text" name="prénom" required><br>

    <label for="date_naissance">Date de naissance:</label>
    <input type="date" name="date_naissance" required><br>

    <label for="sexe">Sexe du Joueur:</label>
    Sexe : <select name="sexe">
        <option value="0">Faites votre choix</option>
        <option value="1">Homme</option>
        <option value="2">Femme</option>
        <option value="3">Autre</option>
    </select><br><br>
    <input type="submit" value="Créer le match">
</form>


</body>
</html>