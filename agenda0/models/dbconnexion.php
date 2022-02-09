<?php

define("HOST", "localhost");
define("DBNAME", "base_vide_m150");
define("DBUSER", "root");
define("DBPWD", "Faritas52");

function connectDB()
{
    static $dbc = null;

    // Première visite de la fonction
    if ($dbc == null)
    {
        // Essaie le code ci-dessous
        try
        {
        $dbc = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, DBUSER, DBPWD, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_PERSISTENT => true
        ));
        }
        // Si une exception est arrivée
        catch (Exception $e)
        {
            echo 'Erreur : ' . $e->getMessage() . '<br />';
            echo 'N° : ' . $e->getCode();
            // Quitte le script et meurt
            die('Could not connect to MySQL');
        }
    }
    // Pas d'erreur, retourne un connecteur
    return $dbc;
}

?>