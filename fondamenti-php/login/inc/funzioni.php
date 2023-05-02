<?php
function autenticazione()
{
    if (!$_SESSION) {
        header("Location: index.php"); //redirect
    }
}

function date2user($date)
{
    $d = explode("-", $date);
    $giorno = explode(" ", $d[2]);
    return "$giorno[0]/{$d[1]}/{$d[0]}";


}