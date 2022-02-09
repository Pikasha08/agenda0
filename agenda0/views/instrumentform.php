<?php
// Projet: Association XYZ
// Script: Vue instrumentform.php
// Description: Formulaire de création ou de modification d'instruments
// Auteur: nom prénom
// Version 1.0.0 PC 1.4.2018 / Codage initial


$pageTitle = (empty($idEvent)) ? "Création d'un instrument" : "Modification d'un instrument";
include "header.php";
?>
<form action="./saveinstrument.php" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-3" for="instrument">Instrument: *</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="instrument" id="instrument" value="<?= $instrument ?>"  />
        </div>
    </div>
    <?php if (!empty($errors['instrument'])) : ?>
        <div class="alert alert-danger col-sm-9 col-sm-offset-3">
            <?php echo $errors['instrument']; ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <div class="col-sm-3">
            (* champs obligatoires)
            <input type="hidden" name="idInstrument" value="<?= $idInstrument ?>" >
        </div>
        <div class="col-sm-9">
            <input type="submit" name="submit" value="Enregistrer" />
        </div>
    </div>
</form>

<?php include "footer.php" ?>