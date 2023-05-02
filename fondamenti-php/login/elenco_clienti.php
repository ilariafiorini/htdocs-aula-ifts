<?php

session_start();

include("inc/conn_db.php");
include("inc/funzioni.php");


autenticazione();
print_r($_SESSION);
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Clienti</title>
</head>
<body>

    **** Riservatissimo ***
    <br>
    Questo è l'elenco dei clienti 
    <?php
    $sql = " SELECT * FROM clienti";
    $clienti=fz_sql($sql);
    foreach ($clienti as $cliente) {
        echo $cliente['nome'] . " " . $cliente['cognome']
            . " <a href= elenco_prenotazioni.php?id={$cliente['ID_cliente']}>prenotazioni</a>"
            . "<br>";
    }
    ?>
</body>
</html>