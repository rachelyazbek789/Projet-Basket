<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un match</title>
    <link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
<h1>Création d'un match</h1>

<form action="traits/traitCreateMatcch.php" method="post">
    <label for="equipe1">équipe 1:</label>
    <input type="text" name="equipe1" required><br>

    <label for="equipe2">équipe 2:</label>
    <input type="text" name="equipe2" required><br>

    <label for="score1">Score de l'équipe 1:</label>
    <input type="number" name="score1" required><br>

    <label for="score2">Score de l'équipe 2 :</label>
    <input type="number" name="score2" required><br>

    <label for="date">Date du match :</label>
    <input type="date" name="date" required><br>

    <input type="submit" value="Créer le match">
</form>


</body>
</html>
