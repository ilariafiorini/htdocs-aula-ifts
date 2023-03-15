<?php
include ("./connessione.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica PHP del 14 marzo 2023</title>
</head>
<body>
<hr>
<b>Punto 1</b>
<hr>
<?php
fz_connessione();
?>
<hr>
<b>Punto 2</b>
<hr>
<?php
    $sql_prenotazioni = "SELECT arrivo FROM prenotazioni WHERE 1";
    $prenotazioni = fz_sql($sql_prenotazioni);
    // $st = $connessione->prepare($sql_prenotazioni);
    // $st->execute();
    // $prenotazioni = $st->fetchAll(PDO::FETCH_ASSOC);
    var_dump($prenotazioni);
    echo "Ci sono in totale :".count($prenotazioni)." prenotazioni <br>";
    ?>
<hr>
<b>Punto 3</b>
<hr>
<?php
$sql_clienti ="SELECT clienti.nome, clienti.cognome, prenotazioni.arrivo
FROM clienti
INNER JOIN prenotazioni ON clienti.ID_cliente = prenotazioni.cliente
ORDER BY arrivo DESC";
$clienti = fz_sql($sql_clienti);
echo "L'ultimo cliente arrivato è: ".$clienti[0]['nome']." ".$clienti[0]['cognome']."<br>";
?>
<hr>
<b>Punto 4</b>
<hr>
<?php
$sql_prenotazioni = "SELECT giorni_permanenza 
FROM prenotazioni";
$lista_prenotazioni = fz_sql($sql_prenotazioni);
//var_dump($lista_prenotazioni);
$giorni_di_prenotazione = 0;
foreach ($lista_prenotazioni as $prenotazione){
$giorni_di_prenotazione +=  $prenotazione['giorni_permanenza'];
}
echo "In totale sono stati prenotati: ".$giorni_di_prenotazione." giorni";

?>
</body>
</html>
