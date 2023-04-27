<?php
namespace BO;
class Competition
{
    private ?DateTime $debut;

    private ?DateTime $fin;
    private ?int $nb_matchs_max;
    private ?int $id_compet;

    public function getDebut(): ?DateTime
    {
        return $this -> debut;
    }

    public function getFin(): ?DateTime
    {
        return $this -> fin;
    }

    public function getNb_matchs_max(): ?int
    {
        return $this -> nb_matchs_max;
    }

    public function getId_compet(): ?int
    {
        return $this -> id_compet;
    }
    public function setDebut(?DateTime $debut): void
    {
        $this->debut = $debut;
    }

    public function setFin(?DateTime $fin): void
    {
        $this->fin = $fin;
    }

    public function setNbMatchsMax(?int $nb_matchs_max): void
    {
        $this->nb_matchs_max = $nb_matchs_max;
    }

    public function setIdCompet(?int $id_compet): void
    {
        $this->id_compet = $id_compet;
    }
    public function __construct(?array $datas = null)
    {
        if(!is_null($datas)){
            (isset($datas['date_debut'])) ? $this->setDebut($datas['date_debut']) : $this-> setDebut('');
            (isset($datas['date_fin'])) ? $this->setFin($datas['date_fin']) : $this->setFin('');
            (isset($datas['nb_match_max'])) ? $this->setNbMatchsMax($datas['nb_match_max']) : $this->setNbMatchsMax('');
            (isset($datas['id_compet'])) ? $this->setIdCompet($datas['id_compet']) : $this->setIdCompet(id_compet:'');
        }
    }
}