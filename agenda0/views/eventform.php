<?php
// Projet: Association XYZ
// Script: Vue eventform.php
// Description: Formulaire de création ou de modification d'événements
// Auteur: nom prénom
// Version 1.0.0 PC 1.4.2018 / Codage initial


$pageTitle = (empty($idEvent)) ? "Création d'un événement" : "Modification d'un événement";
include "header.php";
?>
<form action="./saveevent.php" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-3" for="title">Titre: *</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" id="title" value="<?= $title ?>"  />
        </div>
    </div>
    <?php if (!empty($errors['title'])) : ?>
        <div class="alert alert-danger col-sm-9 col-sm-offset-3">
            <?php echo $errors['title']; ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label class="control-label col-sm-3" for="dateEvent">Date et Heure: *</label>
        <div class="col-sm-9">
            <input type='datetime-local' class="form-control"  id='dateEvent' name='dateEvent' value="<?= $dateEvent ?>"/>
        </div>
    </div>
    <?php if (!empty($errors['dateEvent'])) : ?>
        <div class="alert alert-danger col-sm-9 col-sm-offset-3">
            <?php echo $errors['dateEvent']; ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label class="control-label col-sm-3" for="duration">Durée: </label>
        <div class="col-sm-9">
            <input class="form-control" type="time" name="duration" id="duration" value="<?= $duration ?>"  />
        </div>
    </div>
    <?php if (!empty($errors['duration'])) : ?>
        <div class="alert alert-danger col-sm-9 col-sm-offset-3">
            <?php echo $errors['duration']; ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label class="control-label col-sm-3" for="location">Lieu: </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="location" id="location" value="<?= $location ?>"  />
        </div>
    </div>
    <?php if (!empty($errors['location'])) : ?>
        <div class="alert alert-danger col-sm-9 col-sm-offset-3">
            <?php echo $errors['location']; ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <div class="col-sm-3">
            (* champs obligatoires)
            <input type="hidden" name="idEvent" value="<?= $idEvent ?>" >
        </div>
        <div class="col-sm-9">
            <input type="submit" name="submit" value="Enregistrer" />
        </div>
    </div>
</form>

<?php include "footer.php" ?>