<?php

use BO\Club;
use DAO\ClubDAO;

require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\tests\formCreatClub.html';

require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\src\view\fonctions.php';
//récup données du form POST



$nomClb=$_POST['nomClb'];
$addClb=$_POST['addClb'];
$cpClb=$_POST['cpClb'];
$nomUti=$_POST['nomUti'];

$nomEquip=$_POST['nomEquip'];


//mettre bdd


$db=connectBdd($infoBdd);
$club=new Club($nomClb, $addClb,$cpClb);


$clubDao= new DAO\ClubDAO($db);

$clubDao->create($club);
