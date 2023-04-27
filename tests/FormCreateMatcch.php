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
<label for="idmatch">Numéro match</label>
<input type="text" id="idmatch" name="idmatch" required><br><br>

<label for="addClb"></label>
<input type="text" id="addClb" name="addClb" required><br><br>

<label for="cpClb">Code Postal :</label>
<input type="text" id="cpClb" name="cpClb" required><br><br>

<label for="idUti">Nom du gérant:</label>
<input type="text" id="idUti" name="idUti" required><br><br>

<label for="nomEquip">Nom de l'équipe:</label>
<input type="text" id="nomEquip" name="nomEquip" required><br><br>


<input type="submit" id="submit" name="submit" value="Envoyer">


</body>
</html>





