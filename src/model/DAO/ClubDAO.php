<?php

namespace DAO;
use BO\Club;
use BO\Joueur;
use BO\Utilisateur;
//require_once ' /src/model/DAO/UtilisateurDAO.php';
class ClubDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }




    public function insertClub($nomClb, $addClb, $cpClb, $gerants, $joueurs)
    {
        $sql = "INSERT INTO acteur (nomClb, addClb,cpClb,gerants, joueurs) VALUES (:nomClb, :addClb,:cpClb,:gerants,:joueurs)";
        $req = $this->db->prepare($sql);
        $req->bindValue(":nomClb", $nomClb);
        $req->bindValue(":addClb", $addClb);
        $req->bindValue(":gerants", $gerants);
        $req->bindValue(":joueurs", $joueurs);

        return $req->execute();
    }

    public function getClubById($id) {
        $sql = "SELECT * FROM Club WHERE idClb = :idClb";
        $req = $this->db->prepare($sql);

        $req->execute();
        return $req->fetch();
    }


    public function getAllClubs() {
        $sql = "SELECT * FROM Club";
        $result = $this->db->query($sql);
        return $result->fetchAll();
    }




//dz
    public function create(Club $club)
    {

        //stmt= statement
        $stmt = $this->db->prepare("INSERT INTO club (nomClb, addClb) VALUES (:nomClb, :addClb)");
        $stmt->bindParam(":nomClb", $club->getNom());
        $stmt->bindParam(":addClb", $club->getaddClb());

        $club->setId($this->db->lastInsertId());
        return $stmt->execute();

    }

    public function updateClub(Club $club)
    {
        $stmt = $this->db->prepare("UPDATE clubs SET nomClb = :nomClb, addClb= :addClb WHERE id = :id");
        $stmt->bindParam(":nomClb", $club->getNom());
        $stmt->bindParam(":addClb", $club->getaddClb());
        return  $stmt->execute();
    }


    //supprimer
    // si club suppr
    public function delete(Club $club)
    {
        header('Club.php');

            $requete =$this->db->prepare('DELETE FROM Club WHERE idClb = ?');
             return $requete->execute(array($_POST['idClb']));


    }







}