<?php

namespace BO;

class Club {
    private $idClb;
    private $nomClb;
    private $addClb;
    private $cpClb;

    private $gerants = array();
    private $joueurs = array();

    public function __construct($nomClb, $addClb,$cpClb) {
        $this->nomClb = $nomClb;
        $this->addClb = $addClb;
        $this->cpClb=$cpClb;
    }

    public function getId() {
        return $this->idClb;
    }


    public function setID(int $idClb)
    {

        $this->idClb = $idClb;


    }

    public function getNom() {
        return $this->nomClb;
    }

    public function setNom(string $nomClb) {
        $this->nomClb = $nomClb;
    }

    public function getaddClb() {
        return $this->addClb;
    }

    public function setaddClb(string $addClb) {
        $this->addClb = $addClb;
    }

    public function getGerants() {
        return $this->gerants;
    }

    public function addGerant(/* type gérant*/$gerant) {
        $this->gerants[] = $gerant;
    }

    public function removeGerant(/* type gérent*/$gerant) {
        $index = array_search($gerant, $this->gerants);
        if ($index !== false) {
            unset($this->gerants[$index]);
        }
    }

    public function getJoueurs() {
        return $this->joueurs;
    }

    public function ajoutJoueur(/* type joueur*/$joueur) {
        $this->joueurs[] = $joueur;
    }

    public function removeJoueur(/* type joueur*/$joueur) {
        $index = array_search($joueur, $this->joueurs);
        if ($index !== false) {
            unset($this->joueurs[$index]);
        }
    }











}