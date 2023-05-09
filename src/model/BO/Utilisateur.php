<?php

namespace BO;
class Utilisateur{
    private ?string $nomUti;
    private ?string $prenomUti;
    private ?int $telUti;
    private ?string $profilUti;

    private ?int $idUti;

    private ?string $mdp;

    public function getIdUti(): ?int {
        return $this-> idUti;
    }
    public function getNomUti():?string {
        return $this->nomUti;
    }

    public function getPreUti():?string {
        return $this->prenomUti;
    }

    public function getTelUti(): ?int {
        return $this->telUti;
    }
    public function getProfilUti():?string {
        return $this->profilUti;
    }

    public function getMdpUti():?string {
        return $this->mdp;
    }







    public function setIdUti(int $idUti): self{
        $this->idUti = $idUti;
        return $this;
    }
    public function setNomUti(string $nomUti):self {
        $this->nomUti = $nomUti;
        return $this;
    }

    public function setPreUti(string $preUti):self {
        $this-> prenomUti= $preUti;
        return $this;
    }

    public function  setTelUti(int $telUti): self {

        $this->telUti = $telUti;
        return $this;
    }


    public function setProfilUti($profil):self {
        $this->profilUti = $profil;
        return $this;
    }

    public function setMdpUti($mdpUti):self {
        $this->mdp = $mdpUti;
        return $this;
    }





    function __construct(?array $datas = null)
    {
    var_dump($datas);

        if(!is_null($datas)){
            (isset($datas['idUti'])) ? $this->setIdUti($datas['idUti']) : $this->idUti =null;
            (isset($datas['nomUti'])) ? $this->setNomUti($datas['nomUti']) : $this->nomUti ="";
            (isset($datas['preUti'])) ? $this->setPreUti($datas['preUti']) : $this->prenomUti ="";
            (isset($datas['telUti'])) ? $this->setTelUti($datas['telUti']) : $this->telUti =null;
            (isset($datas['profilUti'])) ? $this->setProfilUti($datas['profilUti']) : $this->profilUti ="";
            (isset($datas['mdpUti'])) ? $this->setMdpUti($datas['mdpUti']) : $this->mdp ="";
        }
    }
}