<?php

namespace BO;

class Club
{
    private   $idClb; //modif git
    private string $nomClb;
    private string $addClb;
    private $cpClb;

    private string $gerants;
    private $joueurs;


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

   // public function addGerant(/* type gérant*/ $gerant)
   // {
   //     $this->gerants[] = $gerant;
   // }

   // public function removeGerant(/* type gérent*/ $gerant)
   // {
    //    $index = array_search($gerant, $this->gerants);
    //    if ($index !== false) {
    //        unset($this->gerants[$index]);
     //   }
   // }

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

        if (!is_null($datas)) {
            (isset($datas['idClb'])) ? $this->setID($datas['idClb']) : $this->setID(null);
            (isset($datas['nomClb'])) ? $this->setNom($datas['nomClb']) : $this->setNom('');
            (isset($datas['addClb'])) ? $this->setaddClb($datas['addClb']) : $this->setaddClb('');


            /* (isset($datas['Club1'])) ? $this->setClub1($datas['Club1']) : $this->setClub1('');
             (isset($datas['Club2'])) ? $this->setClub2($datas['Club2']) : $this->setClub2(Club2:'');
             (isset($datas['id_match'])) ? $this->setIdMatch($datas['id_match']) : $this->setIdMatch(id_match:'');*/
            /*$this->nomClb = $nomClb;
            $this->addClb = $addClb;
            $this->cpClb=$cpClb;*/
        }


    }
}