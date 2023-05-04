<?php

namespace DAO;
use BO\Joueurs;

class JoueurDAO
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;

    }

//ajouter un joueur

function  creatJoueur(Joueurs $joueurs)
{
    $req = $this->db->prepare("INSERT INTO Joueur (nom,prenom,date_naissance,sexe,idClb) VALUES (:nom, : prenom, : date_naissance, :sexe, :idClb");
    $req->bindParam(":nom", $joueurs->getNom());
    $req->bindParam(":prenom", $joueurs->getPrenom());
    $req->bindParam(":date_naissance", $joueurs->getDateNaissance());
    $req->bindParam(":sexe", $joueurs->getGenre());
    $req->bindParam(":idClb", $joueurs->getIdClub());
    $req->execute();
    $joueurs->setId($this->db->lastInsertId());



}


//modifier le jou eur


function  updateJoueur(Joueurs $joueurs)
{
    $req = $this->db->prepare("UPDATE Joueur SET nom = :nom, prenom= :prenom, date_naissance= :date_naissance,sexe= :sexe,idClb= :idClb WHERE idJou = :idJou");
    $req->bindParam(":idJou", $joueurs->getId());
    $req->bindParam(":nom", $joueurs->getNom());
    $req->bindParam(":prenom", $joueurs->getPrenom());
    $req->bindParam(":date_naissance", $joueurs->getDateNaissance());
    $req->bindParam(":sexe", $joueurs->getGenre());
    $req->bindParam(":idClb", $joueurs->getIdClub());
    $req->execute();



}
//supprimer


function supprimerJoueur(Joueurs $joueurs)
{
    $req=$this->db->prepare("DELETE FROM Joueur WHERE idJou= : idJou");
    $req->execute();




}





}