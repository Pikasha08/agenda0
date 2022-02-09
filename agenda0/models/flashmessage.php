<?php
session_start();

/**
 * Permet de définir un message flash
 * @param mixed le message flash
 */
function setFlashMessage($message)
{
    if (gettype($message) == gettype("A"))
    {
        $_SESSION['msgFlash'] = $message;
    }
}

/**
 * Retourne le message flash à afficher
 * @return string le message flash
 */
function getFlashMessage()
{
    return isset($_SESSION['msgFlash']) ? $_SESSION['msgFlash'] : "";
}

?>