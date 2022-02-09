<?php

require_once "dbconnexion.php";

/**
 * Retourne les données des instruments
 * @return false|array 
 */
function getAllInstruments()
{
    static $ps = null;
    $sql = 'SELECT * FROM `agenda`.`instruments`';
    $sql .= ' ORDER BY `instrument` ASC';

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
 * Ajoute un nouvel instrument avec ses paramètres
 * @param mixed $instrument Nom de l'instrument
 * @return bool true si réussi
 */
function addInstrument($instrument)
{
    static $ps = null;
    $sql = 'INSERT INTO `agenda`.`instruments` (`instrument`)';
    $sql .= ' VALUES (:INSTRUMENT)';

    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }
    $answer = false;

    try
    {
        $ps->bindParam(':INSTRUMENT', $instrument, PDO::PARAM_STR);

        $answer = $ps->execute();
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    return $answer;
}

/**
 * Supprime l'instrument avec l'id $idInstrument.
 * @param mixed $idInstrument
 * @return bool 
 */
function deleteInstrument($idInstrument)
{
    static $ps = null;
    $sql = "DELETE FROM `agenda`.`instruments` WHERE (`idInstrument` = :IDINSTRUMENT);";
    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }

    $answer = false;
    try
    {
        $ps->bindParam(':IDINSTRUMENT', $idInstrument, PDO::PARAM_INT);
        $ps->execute();
        $answer = ($ps->rowCount() > 0);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    return $answer;
}

function getInstrumentByID($idInstrument)
{
    static $ps = null;
    $sql = 'SELECT * FROM `agenda`.`instruments`';
    $sql .= ' WHERE idInstrument = :IDINSTRUMENT';

    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }
    $answer = false;

    try
    {
        $ps->bindParam(':IDINSTRUMENT', $idInstrument, PDO::PARAM_INT);

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

function getInstrumentByName($instrument)
{
    static $ps = null;
    $sql = 'SELECT * FROM `agenda`.`instruments`';
    $sql .= ' WHERE instrument = :INSTRUMENT';

    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }
    $answer = false;

    try
    {
        $ps->bindParam(':INSTRUMENT', $instrument, PDO::PARAM_STR);

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

function updateInstrument($idInstrument, $instrument)
{
    static $ps = null;
    $sql = 'UPDATE `agenda`.`instruments`';
    $sql .= ' SET `instrument` = :INSTRUMENT';
    $sql .= ' WHERE `idInstrument` = :IDINSTRUMENT';

    if ($ps == null)
    {
        $ps = connectDB()->prepare($sql);
    }
    $answer = false;

    try
    {
        $ps->bindParam(':IDINSTRUMENT', $idInstrument, PDO::PARAM_INT);
        $ps->bindParam(':INSTRUMENT', $instrument, PDO::PARAM_STR);

        $answer = $ps->execute();
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }

    return $answer;
}

?>