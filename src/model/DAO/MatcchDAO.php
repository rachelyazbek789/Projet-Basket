<?php

namespace DAO;

class MatcchDAO
{
    private $db;

    public function __construct($db){
        $this ->db = $db;
    }

    public function insert(Matcch $UnMatcch): Matcch{
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

    public function delete(Matcch $UnMatcch): Matcch{

    }
}