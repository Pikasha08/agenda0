<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: DeleteEvent.php
// Description: permet de supprimer un événement de la base
// Auteur: nom prenom 
// Version 1.0.0 PC 1.4.2018 / Codage initial

require_once 'models/instruments.php';

// initiation des variables

// Récupération des paramètres
if (filter_has_var(INPUT_POST, 'submit'))
{
    $idInstrument = filter_input(INPUT_POST, 'idInstrument', FILTER_VALIDATE_INT);
    if (is_numeric($idInstrument))
    {
        deleteInstrument($idInstrument);
        setFlashMessage("Successfully deleted instrument !");
    }
}

header("Location:./instruments.php");
exit;
    
