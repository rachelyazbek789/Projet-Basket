<?php

//rf
declare(strict_types=1);
use BO\Club;
use DAO\ClubDAO;

// Pour forcer les dumps pendant les tests
define('DUMP', true);

// Pour avoir la configuration et les informations de connexion dans $infoBdd
require_once __DIR__ . '/../config/appconfig.php';
require_once __DIR__ . '/../src/model/BO/Club.php';
require_once __DIR__ . '/../src/model/DAO/ClubDAO.php';

// Pour utiliser les fonctions
require_once __DIR__ . '/../src/view/fonctions.php';



$db = connectBdd($infoBdd);
dump_var($db, DUMP, 'Objet PDO:');

if (!is_null($db)) {
    $repo = new ClubDAO($db);
    echo '<h1>Liste des clubs</h1>';
    $res = $repo->getAllClubs();
    dump_var($res, DUMP, 'résultat:');

    echo '<h1>Club 5 </h1>';
    $res = $repo->getClubById(5);
    dump_var($res, DUMP, 'résultat:');

    echo '<h1>Ajout Club </h1>';
    $tab = array(
        'idClb'=>1,
        'nomClb'=>"clubtestDAO",
        'addClb'=>"adresse test DAO",
        'cpClb'=>"00000",
    );
    $clb = new BO\Club($tab);
    $res = $repo->insertClub($clb->getId(), $clb->getNom(), $clb->getaddClb(), $clb->getCpClb(), $clb->getGerants());
    dump_var($res, DUMP, 'résultat après insertion :');


    echo '<h1>Modif Club </h1>';
    $clb->setNom('ClubTEST DAO');
    dump_var($res, DUMP, 'résultat:');
    $res = $repo->updateClub($clb);
    dump_var($res, DUMP, 'résultat:');


    echo '<h1>Supression club </h1>';
    $tab = array(
        'idClb' => 20
    );
    $clb = new BO\Club($tab);

    $res = $repo->delete($clb);
    dump_var($res, DUMP, 'résultat:');


}