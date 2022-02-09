<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: Contrôleur editevent.php
// Description: initialise l'édition d'un événment en définissant les champs à vide
//   ou en les récupérant à l'aide du modèle events.
// Auteur: nom prenom
// Version 1.0.0 PC 1.4.2018 / Codage initial

require "./models/events.php";

// initialisation des champs de saisie
$title = '';
$dateEvent = '';
$duration = '';
$location = '';

// En fonction du role, la valeur de l'id peut changer
$idEvent = null;

// Récupération des informations de l'utilisateur, en cas de modification
if (isset($_GET['id']))
{
    // TRAITEMENT POUR INITIALISER LA MODIF...
    $idEvent = $_GET['id'];
    
    if (is_numeric($idEvent))
    {
        $answer = getEventByID($idEvent);
        
        $title = $answer[0]['title'];
        $dateEvent = str_replace(" ", "T", $answer[0]['dateEvent']);
        $duration = $answer[0]['duration'];
        $location = $answer[0]['location'];
    }
}

include './views/eventform.php';
