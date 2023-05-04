<?php
require_once '../model/BO/Utilisateur.php';
require_once '../model/DAO/UtilisateurDAO.php';

$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $utilisateur = new \BO\Utilisateur();

    $utilisateur->setPreUti($_POST['prenom']);
    $utilisateur->setNomUti($_POST['nom']);

    $utilisateur->setTelUti($_POST['telephone']);
    $utilisateur->setProfilUti($_POST['profil']);
    $utilisateur->setMdpUti($_POST['motdepasse']);

    $dao = new DAO\UtilisateurDAO();
    $resultat = $dao->ajouterUtilisateur($utilisateur);

    if ($resultat) {
        header('Location: ../../traits/inscription_reussie.php');
        exit();
    } else {
        $erreur = 'Erreur lors de l\'enregistrement de l\'utilisateur.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
<h1>Inscription</h1>
<?php if ($erreur !== ''): ?>
    <p style="color: red;"><?php echo $erreur; ?></p>
<?php endif; ?>
<form method="post" action="">
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