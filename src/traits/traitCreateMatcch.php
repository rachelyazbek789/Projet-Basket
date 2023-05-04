<?php

use BO\Matcch;
use DAO\MatcchDAO;

require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\tests\formCreateMatcch.html';

require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\src\view\fonctions.php';
//récup données du form POST



$score_club_deux = $_POST['score_club_deux'];
$date_match = $_POST['date_match'];
$Vainqueur = $_POST['Vainqueur'];
$id_club_un=$_POST['id_club_un'];
$id_club_deux = $_POST['id_club_deux'];
$id_match = $_POST['id_match'];
$score_club_un=$_POST['score_club_un'];


//mettre bdd


$db=connectBdd($infoBdd);
$matcch =new Matcch($score_club_deux, $date_match, $Vainqueur, $id_club_un, $id_club_deux, $id_match, $score_club_un);


$matcchDAO = new DAO\MatcchDAO($db);

$matcchDAO->create($matcch);
