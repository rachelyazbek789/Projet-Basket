<?php

namespace DAO;

use BO\Matcch;

class MatcchDAO
{
    private $db;

    public function __construct($db){
        $this ->db = $db;
    }

    public function getAll():?array{
        $resultSet = NULL;
        $query = 'SELECT * FROM Matcch';
        $rqtResult = $this ->bdd -> query($query);
        if ($rqtResult){
            $rqtResult -> SetFetchMode(\PDO::FETCH_ASSOC);
            foreach ($rqtResult as $row){
                $resultSet[] = new Matcch($row);
            }
        }
        return $resultSet;
    }

    public function insert(Matcch $UnMatcch): Matcch{
        $date = date_format($UnMatcch->getJourDuMatch(),'23/03/2023');
        $req= "INSERT INTO Matcch(id_club_un, id_club_deux ,date_match ) VALUE (:clubun, :clubdeux ,:datem );";
        $reqPrep = $this ->db ->prepare($req);
        $clubun = $UnMatcch["id_club_un"];
        $clubdeux = $UnMatcch["id_club_deux"];
        $datem = $UnMatcch["date_match"];

        $res = $reqPrep -> execute(
            [':clubun' => $UnMatcch -> getIdClubUn(),
                ':clubdeux' => $UnMatcch -> getIdClubDeux(),
                ':datem' => $UnMatcch -> getDateMatch()
            ]
        );
        $id = $this -> db -> LastInsertId();
        $UnMatcch["idCompet"] = $id;
        return $UnMatcch;
    }

    public function update(Matcch $UnMatcch): Matcch
    {
        $resultSet = null;
        $id_match = null;
        if (isset($UnMatcch['id_match'])) {
            $score_club_deux = $UnMatcch['score_club_deux'];
            $score_club_un = $UnMatcch['score_club_un'];
            $Vainqueur = $UnMatcch['Vainqueur'];
            $date_match = $UnMatcch['date_match'];
            $req = "UPDATE Matcch SET score_club_deux=?, score_club_un=?, Vainqueur=?, date_match=? WHERE id_match=?";
            $reqPrep = $this->bdd->prepare($req);
            $res = $reqPrep->execute([$score_club_deux, $score_club_un, $Vainqueur, $date_match]);
            $query = "SELECT * FROM Matcch WHERE id_match = :idmatch";
            $queryPrep = $this->bdd->prepare($query);
            $resquery = $queryPrep->execute(
                ["id_match" => $id_match]
            );
            if($resquery) {
                while ($row = $queryPrep->setFetchMode(\PDO::FETCH_ASSOC)) {
                    $resultSet = $row;
                }
            }
        }
        else {
            $resultSet = insert($UnMatcch);
        }
        return $resultSet;
    }

    public function delete(Matcch $UnMatcch): Matcch{

    }
}