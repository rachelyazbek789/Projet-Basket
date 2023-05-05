<?php
require_once '../model/BO/Utilisateur.php';
require_once '../model/DAO/UtilisateurDAO.php';

$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $utilisateur = new \BO\Utilisateur();
    $utilisateurData = [
        'prenomUti' => $_POST['prenom'],
        'nomUti' => $_POST['nom'],
        'telUti' => $_POST['telephone'],
        'mdp' => $_POST['motdepasse']
    ];

    //parcourt les données soumises dans le formulaire et assigne chaque valeur à la propriété correspondante de l'objet $utilisateur.
    foreach ($utilisateurData as $prop => $value) {
        $method = 'set' . ucfirst($prop);
        $utilisateur->$method($value);
    }


    $dao = new DAO\UtilisateurDAO();
    $resultat = $dao->ajouterUtilisateur($utilisateur);
    if ($resultat != null) {
        header('Location: ../../traits/inscription_reussie.php');
        exit();
    } else {
        $erreur = 'Erreur lors de l\'enregistrement de l\'utilisateur.';
    }
}
?>











