<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: Contrôleur saveevent.php
// Description: enregistre les infos de l'événement.
// Auteur: nom prenom
// Version 1.0.0 PC 1.4.2018 / Codage initial

require_once 'models/events.php';

// Initialisation des variables
$errors = array();
$title = "";
$dateEvent = "";
$duration = "";
$location = "";

if (filter_has_var(INPUT_POST,'submit'))
{
    // récupération des données provenant des données saisies par l'utilisateur
    
    $title = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
    $dateEvent = trim(filter_input(INPUT_POST,'dateEvent',FILTER_SANITIZE_STRING));
    $duration = trim(filter_input(INPUT_POST,'duration',FILTER_SANITIZE_STRING));
    $location = trim(filter_input(INPUT_POST,'location',FILTER_SANITIZE_STRING));
          
    $idEvent = filter_input(INPUT_POST, 'idEvent', FILTER_VALIDATE_INT);
    if ($idEvent === false)
    {
       $idEvent = null;
    }

   
    // vérification des données saisies
    if (empty($title))
        $errors['title'] = "le nom de l'événement ne peut pas être vide";
    if (empty($dateEvent))
        $errors['firstName'] = "La date et l'heure de l'événement doivent être précisés";
    if (empty($duration))
        $duration = null;
    if (empty($location))
        $location = null;   
        
    // si il n'y a pas d'erreur dans les données saisies
    if (empty($errors))
    {
        if (is_numeric($idEvent))
        {
            // FAIRE LA MISE A JOUR DE L'EVENEMENT
            updateEvent($idEvent, $title, $dateEvent, $duration, $location);
            setFlashMessage("Successfully updated event !");
        }
        else
        {
            // AJOUTER LE NOUVEL EVENEMENT
            addEvent($title, $dateEvent, $duration, $location);
            setFlashMessage("Successfully added event !");
        }
        header("Location:agenda.php");
        exit;
    }
}

include './views/eventform.php';