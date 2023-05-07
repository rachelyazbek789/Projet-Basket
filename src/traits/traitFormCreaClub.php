<?php

use BO\Club;
use BO\Joueur;
use BO\Utilisateur;
use DAO\ClubDAO;

require_once 'formCreatClub.php';

require_once 'fonctions.php';
//récup données






$bdd = connectBdd($infoBdd);

// si créa nouveau club

$club=new Club();
$clubDao=new DAO\ClubDAO($db);






/*if (isset($_POST['nomClb']) && isset($_POST['addClb']) && isset($_POST['cpClb']) && isset($_POST['idUti']) && isset($_POST['nomEquip'])) {
    // Ajouter le club à la base de données
    $requete = $bdd->prepare('INSERT INTO Club (nomClb, addClb, cpClb, idUti, nomEquip) VALUES (?, ?, ?, ?, ?)');
    $requete->execute(array($_POST['nomClb'], $_POST['addClb'], $_POST['cpClb'], $_POST['idUti'], $_POST['nomEquip']));
    header('Club.php');
    exit();
}*/



















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
