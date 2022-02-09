<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: Contrôleur editinstrument.php
// Description: initialise l'édition d'un instrument en définissant les champs à vide
//   ou en les récupérant à l'aide du modèle instruments.
// Auteur: Crockett Sasha
// Version 1.0.0 PC 1.4.2018 / Codage initial

require "./models/instruments.php";

// initialisation des champs de saisie
$instrument = '';

// En fonction du role, la valeur de l'id peut changer
$idInstrument = null;

// Récupération des informations de l'utilisateur, en cas de modification
if (isset($_GET['id']))
{
    // TRAITEMENT POUR INITIALISER LA MODIF...
    $idInstrument = $_GET['id'];
    
    if (is_numeric($idInstrument))
    {
        $answer = getInstrumentByID($idInstrument);
        
        $instrument = $answer[0]['instrument'];
    }
}

include './views/instrumentform.php';
