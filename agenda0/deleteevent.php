<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: DeleteEvent.php
// Description: permet de supprimer un événement de la base
// Auteur: nom prenom 
// Version 1.0.0 PC 1.4.2018 / Codage initial

require_once 'models/events.php';

// initiation des variables

// Récupération des paramètres
if (filter_has_var(INPUT_POST, 'submit'))
{
    $idEvent = filter_input(INPUT_POST, 'idEvent', FILTER_VALIDATE_INT);
    if (is_numeric($idEvent))
    {
        deleteEvent($idEvent);
        setFlashMessage("Successfully deleted event !");
    }
}

header("Location:./agenda.php");
exit;
    
