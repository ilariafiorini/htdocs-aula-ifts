<?php
session_start();

include("inc/funzioni.php");
include("inc/conn_db.php");
autenticazione();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco prenotazioni</title>
</head>

<body>
    ***RISERVATISSIMO***
    <br>
    Questo è l'elenco delle prenotazioni<br>


    <?php
    $id = "";
    $binds = [];
    $sql = "SELECT * FROM prenotazioni ";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $binds = [['segnaposto' => 'id', 'var' => $id]];
        $sql .= " WHERE cliente = :id ";
        echo "del cliente con id = $id <br>";
    }


    $prenotazioni = fz_sql($sql, $binds);

    foreach ($prenotazioni as $prenotazione) {
        echo date2user($prenotazione['arrivo']) . " " . date2user($prenotazione['partenza'])
            . "<br>";
    }
    ?>

</body>

</html>