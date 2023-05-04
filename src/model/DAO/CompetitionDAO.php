<?php

namespace DAO;

use BO\Competition;

class CompetitionDAO
{
    private $db;

    public function __construct($db){
        $this ->db = $db;
    }

    public function getAllCompet():?array{
        $resultSet = NULL;
        $query = 'SELECT * FROM Competition';
        $rqtResult = $this ->bdd -> query($query);
        if ($rqtResult){
            $rqtResult -> SetFetchMode(\PDO::FETCH_ASSOC);
            foreach ($rqtResult as $row){
                $resultSet[] = new Competition($row);
            }
        }
        return $resultSet;
    }

    public function createCompet(Competition $UneCompetition): Competition
    {
        //stmt= statement
        $stmt = $this->db->prepare("INSERT INTO Competition (debut, fin, nb_matchs_max ) VALUES (:debut, :fin, :nb_matchs_max)");
        $stmt->bindParam(":debut", $UneCompetition->getDebut());
        $stmt->bindParam(":fin", $UneCompetition->getFin());
        $stmt->bindParam(":nb_matchs_max", $UneCompetition->getNb_matchs_max());
        $stmt->execute();
        $UneCompetition->setId($this->db->lastInsertId());

        return $UneCompetition;
    }

    public function insertCompet(Competition $UneCompetition): Competition{
        $req= "INSERT INTO Competition(debut, fin, nb_matchs_max) VALUE (:deb, :fi, :nbmatch);";
        $reqPrep = $this ->db ->prepare($req);
        $deb = $UneCompetition["debut"];
        $fi = $UneCompetition["fin"];
        $nbmatch = $UneCompetition["nb_matchs_max"];

        $res = $reqPrep -> execute(
                [':debut' => $UneCompetition -> getDebut(),
                    ':fin' => $UneCompetition -> getFin(),
                    ':nb_matchs_max' => $UneCompetition -> getNb_matchs_max()
                ]
            );
            $id = $this -> db -> LastInsertId();
            $UneCompetition["idCompet"] = $id;
            return $UneCompetition;
    }

}