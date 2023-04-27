<?php

namespace DAO;
use BO\Club;
class ClubDAO
{
    private $bdd;

    public function __construct(\PDO $bdd){
        if (!is_null($bdd))
            $this -> bdd = $bdd;}

    public function create(Club $club)
    {

        //stmt= statement
        $stmt = $this->db->prepare("INSERT INTO clubs (nomClb, addClb) VALUES (:nomClb, :addClb)");
        $stmt->bindParam(":nomClb", $club->getNom());
        $stmt->bindParam(":addClb", $club->getaddClb());
        $stmt->execute();
        $club->setId($this->db->lastInsertId());


        if ($this->db->libelle_pro="Gérant")
        {
            foreach ($club->getGerants() as $gerant) {
                $stmt = $this->db->prepare("INSERT INTO profil (idClb, idUti) VALUES (:idClb, :idUti)");
                $stmt->bindParam(":idClb", $club->getId());
                $stmt->bindParam(":idUti", $gerant->getId());
                $stmt->execute();
            }

        }

        foreach ($club->getJoueurs() as $joueur) {
            $stmt = $this->db->prepare("INSERT INTO joueurs (idClb, idUti) VALUES (:idClb, :idUti)");
            $stmt->bindParam(":idClb", $club->getId());
            $stmt->bindParam(":idUti", $joueur->getId());
            $stmt->execute();
        }
    }

    public function update(Club $club)
    {
        $stmt = $this->db->prepare("UPDATE clubs SET nom = :nom, ville = :ville WHERE id = :id");
        $stmt->bindParam(":idClb", $club->getId());
        $stmt->bindParam(":nomClb", $club->getNom());
        $stmt->bindParam(":addClb", $club->getaddClb());
        $stmt->execute();
    }


}