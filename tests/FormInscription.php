

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
<h1>Inscription</h1>

<form method="post" action="../src/traits/inscription_reussie.php">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <div>
        <label for="telephone">Téléphone :</label>
        <input type="number" id="telephone" name="telephone">
    </div>
    <div>
        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse">
    </div>
    <div>
        <input type="submit" value="S'inscrire">
    </div>
</form>
</body>
</html>
