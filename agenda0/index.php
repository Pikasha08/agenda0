<?php
require_once "./models/flashmessage.php";

// Projet: Association XYZ
// Script: Contrôleur home.php
// Description: affiche la page d'accueil du site. essentiellement statique
// Auteur: Crockett Sasha
// Version 1.0.0 PC 2.4.2018 / Codage initial

$msgFlash = getFlashMessage();
setFlashMessage("");

include 'views/home.php';

require './models/instruments.php';