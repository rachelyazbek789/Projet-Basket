<?php

namespace BO;
use BO\Utilisateur;
use DAO\UtilisateurDAO;
require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\src\model\BO\Utilisateur.php';
class Club
{
    private   $idClb; //modif git
    private string $nomClb;
    private string $addClb;
    private string $cpClb="";

    private Utilisateur $gerants;
    private Joueur $joueurs;


    public function getId()
    {
        return $this->idClb;
    }


    public function setID(int $idClb)
    {

        $this->idClb = $idClb;


    }

    public function getNom()
    {
        return $this->nomClb;
    }

    public function setNom(string $nomClb)
    {
        $this->nomClb = $nomClb;
    }


    public  function  setCpClb(string $cpClb)
    {

        $this->cpClb=$cpClb;


    }





    public function getJoueur()
    {

        return $this->joueurs;

    }

    public  function  setJoueur($joueurs)
    {
        $this->joueurs=$joueurs;

    }

   public function setGerant($gerants)
   {
       $this->gerants=$gerants;

   }


    public function getaddClb()
    {
        return $this->addClb;
    }

    public function setaddClb(string $addClb)
    {
        $this->addClb = $addClb;
    }

    public function getGerants()
    {
        return $this->gerants;
    }

    public function getCpClb()
    {

        return $this->cpClb;
    }


    public function getJoueurs()
    {
        return $this->joueurs;
    }

    public function ajoutJoueur(/* type joueur*/ $joueur)
    {
        $this->joueurs[] = $joueur;
    }

    public function removeJoueur(/* type joueur*/ $joueur)
    {
        $index = array_search($joueur, $this->joueurs);
        if ($index !== false) {
            unset($this->joueurs[$index]);
        }
    }


    public function __construct(?array $datas = null                  /*$nomClb, $addClb,$cpClb*/)
    {//modifier faire avec tableau
        $ger= array

        ( 'nomUti',
          'preUti',
         'telUti',
         'profilUti',

          'idUti',

          'mdpUti');

        $this->idClb = null;
        $this->nomClb = "";
        $this->addClb = "";
        $this->cpClb ="";
        $this->gerants= new Utilisateur($ger);



        if (!is_null($datas)) {
            (isset($datas['idClb'])) ? $this->setID($datas['idClb']) : $this->setID(null);
            (isset($datas['nomClb'])) ? $this->setNom($datas['nomClb']) : $this->setNom('');
            (isset($datas['addClb'])) ? $this->setaddClb($datas['addClb']) : $this->setaddClb('');
            (isset($datas['cpClb'])) ? $this->setaddClb($datas['cpClb']) : $this->setCpClb('');
            (isset($datas['gerants'])) ? $this->setGerant($datas['gerants']) : $this->setGerant([]);


            /* (isset($datas['Club1'])) ? $this->setClub1($datas['Club1']) : $this->setClub1('');
             (isset($datas['Club2'])) ? $this->setClub2($datas['Club2']) : $this->setClub2(Club2:'');
             (isset($datas['id_match'])) ? $this->setIdMatch($datas['id_match']) : $this->setIdMatch(id_match:'');*/
            /*$this->nomClb = $nomClb;
            $this->addClb = $addClb;
            $this->cpClb=$cpClb;*/
        }


    }
}