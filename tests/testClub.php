<?php


//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

use BO\Club;
use BO\Joueur;
use BO\Utilisateur;
require_once 'C:\wamp64\www\Projet_Basket_Loris_Rachel_Jessim_Ilias\src\model\BO\Club.php';

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

require_once '../config/appConfig.php';

/*use BO\{Acteur};*/

echo '<h1>Instanciation par défaut</h1>';
$obj = new BO\Club();
dump_var($obj, DUMP, 'Club par défaut:');

$tab = array(

     'idClb'=>1,//modif git
    'nomClb'=>"clubtest",
    'addClb'=>"adresse test",
     'cpClb'=>69008,
     'gerants'=>2,
    'joueurs'=>7);


echo '<h1>Instanciation avec toutes les infos </h1>';
$obj = new Club($tab);
dump_var($obj, DUMP, 'Club:');

echo '<h1>Modification du numéro </h1>';
$obj->setID(2);
dump_var($obj, DUMP, 'Club modifié:');

