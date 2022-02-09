<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: Contrôleur saveinstrument.php
// Description: enregistre les infos de l'instrument.
// Auteur: nom prenom
// Version 1.0.0 PC 1.4.2018 / Codage initial

require_once 'models/instruments.php';

// Initialisation des variables
$errors = array();
$instrument = "";

if (filter_has_var(INPUT_POST,'submit'))
{
    // récupération des données provenant des données saisies par l'utilisateur
    
    $instrument = trim(filter_input(INPUT_POST,'instrument',FILTER_SANITIZE_STRING));
          
    $idInstrument = filter_input(INPUT_POST, 'idInstrument', FILTER_VALIDATE_INT);
    if ($idInstrument === false)
    {
       $idInstrument = null;
    }

   
    // vérification des données saisies
    if (empty($instrument))
        $errors['instrument'] = "le nom de l'événement ne peut pas être vide"; 
        
    // si il n'y a pas d'erreur dans les données saisies
    if (empty($errors))
    {
        if (is_numeric($idInstrument))
        {
            // FAIRE LA MISE A JOUR DE L'INSTRUMENT
            updateInstrument($idInstrument, $instrument);
            setFlashMessage("Successfully updated instrument !");
        }
        else
        {
            // AJOUTER LE NOUVEL INSTRUMENT
            addInstrument($instrument);
            setFlashMessage("Successfully added instrument !");
        }
        header("Location:instruments.php");
        exit;
    }
}

include './views/instrumentform.php';