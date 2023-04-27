<?php
namespace BO;
class Matcch
{
    private ?int $score_club_deux;
    private ?DateTime $date_match;
    private ?Club $Vainqueur;
    private ?Club $id_club_un;
    private ?Club $id_club_deux;
    private ?int $id_match;
    private ?int $score_club_un;
    public function getScoreClubDeux(): ?int
    {
        return $this->score_club_deux;
    }
    public function setScoreClubDeux(?int $score_club_deux): void
    {
        $this->score_club_deux = $score_club_deux;
    }
    public function getDateMatch(): ?DateTime
    {
        return $this->date_match;
    }
    public function setDateMatch(?DateTime $date_match): void
    {
        $this->date_match = $date_match;
    }
    public function getVainqueur(): ?Club
    {
        return $this->Vainqueur;
    }
    public function setVainqueur(?Club $Vainqueur): void
    {
        $this->Vainqueur = $Vainqueur;
    }
    public function getIdClubUn(): ?Club
    {
        return $this->id_club_un;
    }
    public function setIdClubUn(?Club $id_club_un): void
    {
        $this->id_club_un = $id_club_un;
    }
    public function getIdClubDeux(): ?Club
    {
        return $this->id_club_deux;
    }
    public function setIdClubDeux(?Club $id_club_deux): void
    {
        $this->id_club_deux = $id_club_deux;
    }
    public function getIdMatch(): ?int
    {
        return $this->id_match;
    }
    public function setIdMatch(?int $id_match): void
    {
        $this->id_match = $id_match;
    }
    public function getScoreClubUn(): ?int
    {
        return $this->score_club_un;
    }
    public function setScoreClubUn(?int $score_club_un): void
    {
        $this->score_club_un = $score_club_un;
    }

    public function __construct(?array $datas = null)
    {
        if(!is_null($datas)){
            (isset($datas['score'])) ? $this->setScore($datas['score']) : $this-> setScore('');
            (isset($datas['date_match'])) ? $this->setDateMatch($datas['date_match']) : $this->setDateMatch('');
            (isset($datas['ClbVainqueur'])) ? $this->setClbVainqueur($datas['ClbVainqueur']) : $this->setClbVainqueur('');
            (isset($datas['Club1'])) ? $this->setClub1($datas['Club1']) : $this->setClub1('');
            (isset($datas['Club2'])) ? $this->setClub2($datas['Club2']) : $this->setClub2(Club2:'');
            (isset($datas['id_match'])) ? $this->setIdMatch($datas['id_match']) : $this->setIdMatch(id_match:'');

        }
    }
}
