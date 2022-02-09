<?php
// Projet: Association XYZ
// Script: Vue header.php
// Description: entête HTML des pages du site 
// Auteur: nom prénom
// Version 1.0.0 PC 1.4.2018 / Codage initial


if (empty($pageTitle)){
    $pageTitle = "sans titre";
}

?>
<!DOCTYPE html>
<html>    
    <head>
        <title>XYZ - <?= $pageTitle ?></title>
        <meta charset="utf-8" />
        <meta name="generator" content="Netbeans" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Association XYZ</h1>
            </header>
            <?php if (!empty($msgFlash)) : ?>
                <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Info!</strong> <?= $msgFlash; ?>
                </div>
            <?php endif; ?>
            <?php include_once 'views/menu.php'; ?>

            <div class="row">
                <div class="col-sm-10">
                    <h4><?= $pageTitle ?></h4>
                </div>
            </div>
