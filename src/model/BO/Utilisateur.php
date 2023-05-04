<?php

namespace BO;
class Utilisateur{
    private ?string $nomUti;
    private ?string $preUti;
    private ?int $telUti;
    private ?string $profilUti;

    private ?int $idUti;

    private ?string $mdpUti;

    public function getIdUti(): ?int {
        return $this-> idUti;
    }
    public function getNomUti():?string {
        return $this->nomUti;
    }

    public function getPreUti():?string {
        return $this->preUti;
    }

    public function getTelUti(): ?int {
        return $this->telUti;
    }
    public function getProfilUti():?string {
        return $this->profilUti;
    }

    public function getMdpUti():?string {
        return $this->mdpUti;
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
        $this-> preUti= $preUti;
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
        $this->mdpUti = $mdpUti;
        return $this;
    }





    function __construct(?array $datas = null)
    {


        if(!is_null($datas)){
            (isset($datas['idUti'])) ? $this->setIdUti($datas['idUti']) : $this->idUti ="";
            (isset($datas['nomUti'])) ? $this->setNomUti($datas['nomUti']) : $this->nomUti ="";
            (isset($datas['preUti'])) ? $this->setPreUti($datas['preUti']) : $this->preUti ="";
            (isset($datas['telUti'])) ? $this->setTelUti($datas['telUti']) : $this->telUti ="";
            (isset($datas['profilUti'])) ? $this->setProfilUti($datas['profilUti']) : $this->profilUti ="";
            (isset($datas['mdpUti'])) ? $this->setMdpUti($datas['mdpUti']) : $this->mdpUti ="";
        }
    }
}