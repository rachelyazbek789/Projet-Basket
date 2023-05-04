<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un match</title>
    <link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
<h1>Création d'un match</h1>

<form action="traits/traitCreateMatcch.php" method="post"></form>
<label for="id_club_un">Nom du club numéro 1</label>
<input type="text" id="id_club_un" name="id_club_un" required><br><br>

<label for="id_club_deux">Nom du club numéro 2</label>
<input type="text" id="id_club_deux" name="id_club_deux" required><br><br>

<label for="date_match">Date du match :</label>
<input type="date" id="date_match" name="date_match" required><br><br>




<input type="submit" id="submit" name="submit" value="Envoyer">


</body>
</html>
