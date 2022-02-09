<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: Contrôleur instruments.php
// Description: affiche les insruments de l'association
// Auteur: Crockett Sasha
// Version 1.0.0 PC 03.11.2021 / Codage initial

$msgFlash = getFlashMessage();
setFlashMessage("");

require_once "./models/instruments.php";

// Normalement la structure ci-dessous est fournie par la base de données. Elle est en dur dans le code ici pour
// vous permettre de démarrer avec un peu de contenu...
$instruments = getAllInstruments();

include "./views/showinstruments.php";
