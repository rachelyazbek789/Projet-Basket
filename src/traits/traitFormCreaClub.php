<?php

use BO\Club;
use DAO\ClubDAO;

require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\tests\formCreatClub.php';

require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\src\view\fonctions.php';
//récup données






$bdd = new PDO('mysql:host=localhost;dbname=projet_basket_equipe4;charset=utf8', 'root', '');

// si créa nouveau club
if (isset($_POST['nomClb']) && isset($_POST['addClb']) && isset($_POST['cpClb']) && isset($_POST['idUti']) && isset($_POST['nomEquip'])) {
    // Ajouter le club à la base de données
    $requete = $bdd->prepare('INSERT INTO Club (nomClb, addClb, cpClb, idUti, nomEquip) VALUES (?, ?, ?, ?, ?)');
    $requete->execute(array($_POST['nomClb'], $_POST['addClb'], $_POST['cpClb'], $_POST['idUti'], $_POST['nomEquip']));
    header('Club.php');
    exit();
}

// si club suppr
if (isset($_POST['supprimer_club'])) {
    // Supprimer le club de la base de données
    $requete = $bdd->prepare('DELETE FROM Club WHERE idClb = ?');
    $requete->execute(array($_POST['idClb']));
    header('Club.php');
    exit();
}

















/*
$nomClb=$_POST['nomClb'];
$addClb=$_POST['addClb'];
$cpClb=$_POST['cpClb'];
$nomUti=$_POST['nomUti'];

$nomEquip=$_POST['nomEquip'];


//mettre bdd


$db=connectBdd($infoBdd);
$club=new Club($nomClb, $addClb,$cpClb);


$clubDao= new DAO\ClubDAO($db);

$clubDao->create($club);*/
