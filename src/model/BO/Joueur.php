<?php

namespace BO;

class Joueur
{





    private $id;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $sexe;
    private $idClb;

    public function __construct($nom, $prenom, $date_naissance, $sexe, $idClb) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->sexe = $sexe;
        $this->idClb = $idClb;
    }

    // Setter
    public function setId($id) {
        $this->id = $id;
    }

    // Getter
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->date_naissance;
    }

    public function getGenre() {
        return $this->sexe;
    }

    public function getIdClub() {
        return $this->idClb;
    }







}