<?php

use BO\Competition;
use DAO;

require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\tests\formCreateCompetition.html';

require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\src\view\fonctions.php';



$debut=$_POST['debut'];
$fin=$_POST['fin'];
$nb_matchs_max=$_POST['nb_matchs_max'];


$db=connectBdd($infoBdd);
$competition=new Competition($debut, $fin,$nb_matchs_max);


$competitionDAO= new DAO\CompetitionDAO($db);

$competitionDAO->create($competition);