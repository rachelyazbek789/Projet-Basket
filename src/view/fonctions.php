<?php


require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\config\appconfig.php';
//connection bdd

function connectBdd(array $infoBdd): ?\PDO {
    $db = null;

    // Récupération des informations de votre table infoBdd

    $port = ($infoBdd['port']);
    $mycharset= ($infoBdd['charset']);
    $hostname= ($infoBdd['host']);
    $mydbname= ($infoBdd['dbname']);
    $myusername= ($infoBdd['user']);
    $mypassword=($infoBdd['pass']);

    //  Composition du DSN
    $dsn="mysql:dbname=$mydbname;host=$hostname;port=$port;charset=$mycharset";
    //  Instanciation de PDO (le \ pour l'espace de nom racine... peut être utile par la suite)

    // renvoi de votre object PDO

    $db= new \PDO($dsn, $myusername, $mypassword);
    return $db;

}