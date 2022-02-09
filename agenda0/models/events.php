<?php

require_once "dbconnexion.php";

/**
 * Retourne les données des events
 * @return false|array 
 */
function getAllEvents()
{
    static $ps = null;
    $sql = 'SELECT * FROM agenda.events';
    $sql .= ' ORDER BY dateEvent ASC';

    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }
    $answer = false;
    
    try
    {
        if ($ps->execute())
        $answer = $ps->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    return $answer;
}

/**
 * Ajoute un nouvel event avec ses paramètres
 * @param mixed $titre Titre de l'event
 * @param mixed $dateHeure  Date de l'event
 * @param mixed $duree  Durée de l'event
 * @param mixed $lieu Lieu de l'event
 * @return bool true si réussi
 */
function addEvent($titre, $dateHeure, $duree, $lieu)
{
    static $ps = null;
    $sql = 'INSERT INTO `agenda`.`events` (`title`, `dateEvent`, `duration`, `location`)';
    $sql .= ' VALUES (:TITLE, :DATEEVENT, :DURATION, :LOCATION)';

    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }
    $answer = false;

    try
    {
        $ps->bindParam(':TITLE', $titre, PDO::PARAM_STR);
        $ps->bindParam(':DATEEVENT', $dateHeure, PDO::PARAM_STR);
        $ps->bindParam(':DURATION', $duree, PDO::PARAM_STR);
        $ps->bindParam(':LOCATION', $lieu, PDO::PARAM_STR);

        $answer = $ps->execute();
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    return $answer;
}

/**
 * Supprime l'event avec l'id $idEvent.
 * @param mixed $idEvent 
 * @return bool 
 */
function deleteEvent($idEvent)
{
    static $ps = null;
    $sql = "DELETE FROM `agenda`.`events` WHERE (`idEvent` = :IDEVENT);";
    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }

    $answer = false;
    try
    {
        $ps->bindParam(':IDEVENT', $idEvent, PDO::PARAM_INT);
        $ps->execute();
        $answer = ($ps->rowCount() > 0);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    return $answer;
}

function getEventByID($idEvent)
{
    static $ps = null;
    $sql = 'SELECT * FROM `agenda`.`events`';
    $sql .= ' WHERE idEvent = :IDEVENT';

    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }
    $answer = false;

    try
    {
        $ps->bindParam(':IDEVENT', $idEvent, PDO::PARAM_INT);

        if ($ps->execute())
        {
            $answer = $ps->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    return $answer;
}

function updateEvent($idEvent, $titre, $dateHeure, $duree, $lieu)
{
    static $ps = null;
    $sql = 'UPDATE `agenda`.`events`';
    $sql .= ' SET `title` = :TITLE, `dateEvent` = :DATEEVENT, `duration` = :DURATION, `location` = :LOCATION';
    $sql .= ' WHERE `idEvent` = :IDEVENT';

    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }
    $answer = false;

    try
    {
        $ps->bindParam(':IDEVENT', $idEvent, PDO::PARAM_INT);
        $ps->bindParam(':TITLE', $titre, PDO::PARAM_STR);
        $ps->bindParam(':DATEEVENT', $dateHeure, PDO::PARAM_STR);
        $ps->bindParam(':DURATION', $duree, PDO::PARAM_STR);
        $ps->bindParam(':LOCATION', $lieu, PDO::PARAM_STR);

        $answer = $ps->execute();
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    return $answer;
}

?>