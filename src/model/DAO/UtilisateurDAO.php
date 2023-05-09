<?php
namespace DAO;

use PDO;
use BO\Utilisateur;

class UtilisateurDAO {

    private \PDO $pdo;

    public function __construct() {
        // Connexion à la base de données MySQL
        $this->pdo = new PDO('mysql:host=localhost;dbname=Projet_Basket_Loris_Rachel_Jessim_Ilias', 'root', '');

    }


    public function ajouterUtilisateur(Utilisateur $utilisateur):?Utilisateur {


        $req = "INSERT INTO Utilisateur(nomUti, prenomUti, telUti, mdp) VALUES (:nom, :prenom, :tel, :mdp)";
        $reqPrep = $this->pdo->prepare($req);
        $res = $reqPrep->execute([
            ":nom"=>$utilisateur->getNomUti(),
            ":prenom"=>$utilisateur->getPreUti(),
            ":tel"=>$utilisateur->getTelUti(),
            ":mdp"=>$utilisateur->getMdpUti()
        ]);

        if($res){
            $row = $reqPrep->fetch(\PDO::FETCH_ASSOC);
            $telUtilisateur = (int) $row['telUti'];

            $Utilisateur = new Utilisateur($row);

        }
        return $Utilisateur;
        // Préparation de la requête SQL d'insertion
        //$stmt = $this->pdo->prepare('INSERT INTO utilisateurs (nomUti, preUti, telUti, mdpUti) VALUES (:nom, :prenom, :telephone, :motdepasse)');
        //$stmt->bindValue(':nomUti', $utilisateur->getNomUti());
        //$stmt->bindValue(':preUti', $utilisateur->getPreUti());
        ///$stmt->bindValue(':telUti', $utilisateur->getTelUti());
        //$stmt->bindValue(':mdpUti', password_hash($utilisateur->getMdpUti(), PASSWORD_DEFAULT));
        //$stmt->execute();
    }



}