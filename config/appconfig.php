<?php
// connection bdd


//  Basculer à TRUE pour activer les affichages de debug, les var_dump ou les dump_var
if (!defined('DUMP')) {
    define('DUMP', true);
}

//  L'url de votre site, sera utile dans les pages en cas de déplacement du site...
define('URL_BASE', "http://localhost/Projet_Basket_Loris_Rachel_Jessim_Ilias");


/*
 *   Exercice 1 question 1 : Vos informations de connexion à la BDD
 */
$infoBdd = array(
    'interface' => 'PDO',        // "pdo" ou "mysqli"
    'type' => 'mysql',        //  mysql ou pgsql
    'host' => 'localhost',             // adresse du serveur, en cas de travail en local localhost
    'port' => 3306,        // Par défaut: 5432 pour postgreSQL, 3306 pour MySQL
    'charset' => 'UTF8',
    'dbname' => 'projet_basket_equipe4',
    'user' => 'root',
    'pass' => '',
);

// function pour gérer les dump_var
if (!function_exists('dump_var')) {
    function dump_var($var, $dump = DUMP, $msg = null)
    {
        if ($dump) {
            if ($msg)
                echo "<p><strong>$msg</strong></p>";
            echo '<pre>';
            var_dump($var);
            echo '</pre>';
        }
    }
}