<?php
// Projet: Association XYZ
// Script: Vue showinsrtuments.php
// Description: liste des instruments
// Auteur: CROCKETT Sasha
// Version 1.0.0 PC 20.10.2021 / Codage initial

$pageTitle = "Agenda de l'association";

include "header.php";
?>
<div class="row">
    <div class="col-sm-2 pull-right">
        <a class="btn btn-default btn-sm pull-right" href="editinstrument.php">Nouvel instrument
            <span class="glyphicon glyphicon-plus-sign"></span></a>
    </div>
</div>
<table class="table table-bordered table-striped table-condensed">
    <tr>
        <th>Instrument</th>
    </tr>

    <?php
// On fait une boucle pour lister tout ce que contient la table :
    foreach ($instruments as $in) :
        ?>
        <tr>
            <td><?= $in['instrument']; ?></td>
            <td>
                <button data-toggle="modal" class="btn btn-default btn-sm" href="#delete<?php echo $in['idInstrument'] ?>">
                    <span class="glyphicon glyphicon-remove"></span></button>
                <div class="modal" id="delete<?php echo $in['idInstrument'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Voulez-vous vraiment supprimer cet instrument ?</h4>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $in['instrument']; ?> :
                                </p>
                            </div>
                            <div class="modal-footer">
                                <form action="./deleteinstrument.php" method="post">
                                    <input type="hidden" name="idInstrument" value="<?php echo $in['idInstrument'] ?>" />
                                    <input class="btn" type="submit" name="submit" value="Supprimer" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    

                <a class="btn btn-default btn-sm" href="editinstrument.php?id=<?= $in['idInstrument'] ?>">
                    <span class="glyphicon glyphicon-edit"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include "footer.php" ?>