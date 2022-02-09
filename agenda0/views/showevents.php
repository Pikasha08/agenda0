<?php
// Projet: Association XYZ
// Script: Vue showevents.php
// Description: liste des évenements
// Auteur: CROCKETT Sasha
// Version 1.0.0 PC 20.10.2021 / Codage initial

$pageTitle = "Agenda de l'association";

include "header.php";
?>
<div class="row">
    <div class="col-sm-2 pull-right">
        <a class="btn btn-default btn-sm pull-right" href="editevent.php">Nouvel événement
            <span class="glyphicon glyphicon-plus-sign"></span></a>
    </div>
</div>
<table class="table table-bordered table-striped table-condensed">
    <tr>
        <th>Titre</th>
        <th>Quand</th>
        <th>Durée</th>
        <th>Lieu</th>
        <th>Edition</th>
    </tr>

    <?php
// On fait une boucle pour lister tout ce que contient la table :
    foreach ($events as $e) :
        ?>
        <tr>
            <td><?= $e['title']; ?></td>
            <td><?= $e['dateEvent']; ?></td>
            <td><?= $e['duration']; ?></td>
            <td><?= $e['location']; ?></td>
            <td>
                <button data-toggle="modal" class="btn btn-default btn-sm" href="#delete<?php echo $e['idEvent'] ?>">
                    <span class="glyphicon glyphicon-remove"></span></button>
                <div class="modal" id="delete<?php echo $e['idEvent'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Voulez-vous vraiment supprimer cet évenement ?</h4>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $e['title']; ?> :
                                    <?php echo $e['dateEvent']; ?>, 
                                    <?php echo $e['duration']; ?> 
                                </p>
                            </div>
                            <div class="modal-footer">
                                <form action="./deleteevent.php" method="post">
                                    <input type="hidden" name="idEvent" value="<?php echo $e['idEvent'] ?>" />
                                    <input class="btn" type="submit" name="submit" value="Supprimer" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    

                <a class="btn btn-default btn-sm" href="editevent.php?id=<?= $e['idEvent'] ?>">
                    <span class="glyphicon glyphicon-edit"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include "footer.php" ?>