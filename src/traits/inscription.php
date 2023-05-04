<?php
// Connexion à la base de données MySQL
$db = new PDO('mysql:host=localhost;dbname=Projet_Basket_Loris_Rachel_Jessim_Ilias', 'root', '');

// Récupération des données saisies par l'utilisateur
$utilisateur = $_POST['nomUti'];
$telephoneuti = $_POST['telUti'];
$motdepasseuti = $_POST['mdpUti'];

// Vérification si l'utilisateur existe déjà dans la base de données
$stmt = $db->prepare('SELECT COUNT(*) FROM Utilisateur WHERE nomUti = :utilisateur OR telUti = :telUti');
$stmt->bindParam(':utilisateur', $utilisateur);
$stmt->bindParam(':telUti', $telephoneuti);
$stmt->execute();
$count = $stmt->fetchColumn();

if ($count > 0) {
    // Si l'utilisateur existe déjà, afficher un message d'erreur
    echo 'Un utilisateur avec le même nom d\'utilisateur ou la même adresse e-mail existe déjà.';
} else {
    // Si l'utilisateur n'existe pas, ajouter les informations dans la base de données
    $stmt = $db->prepare('INSERT INTO Utilisateur (nomUti, telUti, password) VALUES (:nomUti, :telUti, :mdpUti)');
    $stmt->bindParam(':nomUti', $utilisateur);
    $stmt->bindParam(':telUti', $telephoneuti);
    $stmt->bindParam(':mdpUti', password_hash($motdepasseuti, PASSWORD_DEFAULT));
    $stmt->execute();

    echo 'Inscription réussie !';

}
?>