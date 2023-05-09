<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création d'une compétition</title>
    <link href="../../public/css/formulaire.css" rel="stylesheet" type="text/css">
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
<h1>Création d'une compétition</h1>

<form action="traits/traitFormCreateCompetition.php" method="post"></form>
<label for="id_compet">Nom de la compétition</label>
<input type="text" id="id_compet" name="id_compet" required><br><br>

<label for="debut">Début de la compétition</label>
<input type="date" id="debut" name="debut" required><br><br>

<label for="fin">Fin de la compétition </label>
<input type="date" id="fin" name="fin" required><br><br>

<label for="nb_matchs_max">Nombre de match que comporte la compétition</label>
<input type="text" id="nb_matchs_max" name="nb_matchs_max" required><br><br>


<input type="submit" id="submit" name="submit" value="Envoyer">


</body>
</html>
