<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: Contrôleur agenda.php
// Description: affiche l'agenda de l'association
// Auteur: Crockett Sasha
// Version 1.0.0 PC 1.4.2018 / Codage initial

$msgFlash = getFlashMessage();
setFlashMessage("");

require_once "./models/events.php";

// Normalement la structure ci-dessous est fournie par la base de données. Elle est en dur dans le code ici pour
// vous permettre de démarrer avec un peu de contenu...
$events = getAllEvents();

include "./views/showevents.php";
