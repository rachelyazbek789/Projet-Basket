<?php

namespace BO;

class Joueur
{





    private int $id;
    private string $nom;
    private string $prenom;
    private string $date_naissance;
    private string $sexe;
    private int $idClb;

    public function __construct(?array $datas = null )
    {

        if (!is_null($datas)) {
            (isset($datas['id'])) ? $this->setID($datas['id']) : $this->setID(null);
            (isset($datas['nom'])) ? $this->setNom($datas['nom']) : $this->setNom('');
            (isset($datas['prenom'])) ? $this->setPrenom($datas['prenom']) : $this->setPrenom('');
            (isset($datas['date_naissance'])) ? $this->setDateNais($datas['date_naissance']) : $this->setDateNais('');
            (isset($datas['sexe'])) ? $this->setGenre($datas['sexe']) : $this->setGenre('');

        }
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



//setters


   public  function  setNom($nom)
   {
       $this->nom=$nom;

   }



    public  function  setPrenom($prenom)
    {
        $this->prenom=$prenom;

    }



    public  function  setDateNais($date_naissance)
    {
        $this->date_naissance=$date_naissance;

    }


    public  function  setGenre($sexe)
    {
        $this->sexe=$sexe;

    }


}