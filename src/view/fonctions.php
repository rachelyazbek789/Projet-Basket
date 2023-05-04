<?php


require_once 'config/appconfig.php';
require_once '../view/fonctions.php';
//connection bdd

function connectBdd(array $infoBdd): ?\PDO {
    $db = null;


    $port = ($infoBdd['port']);
    $mycharset= ($infoBdd['charset']);
    $hostname= ($infoBdd['host']);
    $mydbname= ($infoBdd['dbname']);
    $myusername= ($infoBdd['user']);
    $mypassword=($infoBdd['pass']);

    $dsn="mysql:dbname=$mydbname;host=$hostname;port=$port;charset=$mycharset";

    $db= new \PDO($dsn, $myusername, $mypassword);
    return $db;

}

function getAll(\PDO $bdd): ?array {
    $resultSet = NULL;
    $query = "SELECT * FROM Competition";
    //Exécution de la rêquete
    $res = $bdd ->query($query);
    if($res){
        while($row = $res->fetch(\PDO::FETCH_ASSOC)){
            $resultSet [] = $row;
        }
    }
    return $resultSet;
}

function insert(\PDO $bdd, array $competition): ?array {

    $req = "INSERT INTO Competition(debut, fin, nb_matchs_max) VALUE (:deb, :fi, :nbmatch); ";

    $reqPrep = $bdd->prepare($req);

    $deb = $competition["debut"];
    $fi = $competition["fin"];
    $nbmatch = $competition["nb_matchs_max"];

    $req = $reqPrep->execute(
        [':deb'=> $deb,
            ':fi' => $fi,
            ':$nbmatch' => $nbmatch]
    );
    $id = $bdd->lastInsertId();

    $competition["idmatch"] = $id;
    return $competition;
}

function getOeuvreId(PDO $bdd, int $id): ?array {

    $resultSet = NULL;

    $req= "SELECT * FROM Competition where id_compet = :id";
    $reqPrep = $bdd->prepare($req);

    $res = $reqPrep->execute(
        [":id" => $id]
    );
    if($res){
        while($row =$reqPrep->fetch(\PDO::FETCH_ASSOC)){
            $resultSet= $row;
            var_dump($row);
        }
    }
    return $resultSet;
}

function update(\PDO $bdd, array $competition): ?array {
    $resultSet = null;
    $id_compet = null;
    if(isset($competition['id_compet']))
    {
        $id_compet = $competition['id_compet'];
        $debut = $competition['debut'];
        $fin = $competition['fin'];
        $nb_matchs_max = $competition['nb_matchs_max'];
        $req = "Update Competition set debut=?, fin=?, nb_matchs_max=? WHERE id_compet=?";
        $reqPrep = $bdd->prepare($req);
        $res = $reqPrep->execute([$debut, $fin, $nb_matchs_max, $id_compet]);

        $query = "SELECT * FROM Competition where id_compet = :idCompet";
        $queryPrep = $bdd->prepare($query);
        $resquery = $queryPrep->execute(
            ["id_compet" => $id_compet]
        );

        if ($resquery)
        {
            while ($row = $queryPrep->fetch(\PDO::FETCH_ASSOC))
            {
                $resultSet = $row;

            }
        }
    }
    else
    {
        $resultSet = insertOeuvre($bdd,$competition);
    }
    return $resultSet;
}