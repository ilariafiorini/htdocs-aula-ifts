<?php
    include_once("./Include/con_db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambia Password</title>
</head>
<body>

<?php
    $id = $_GET['ID'];
    $sql = "
        SELECT * 
        FROM `utenti` 
        WHERE ute_id = :id;
    ";
    $login = "root";
    $passwd = "";
    $bindParams = [['segnaposto'=>':id','var'=>$id]];
    //var_dump($bindParams);
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    $queryResponse = fz_sql($sql,$bindParams,$dsn,$login,$passwd);

    //var_dump($queryResponse);
    echo("<br> Hai chiesto di aggiornare la password di:<br>");
    echo('<br><table style="width:60%" border="1px solid black">');
    
    echo("<tr><td><b>Nome</b></td><td>".$queryResponse[0]['ute_nome']."</td></tr>");
    echo("<tr><td><b>Cognome</b></td><td>".$queryResponse[0]['ute_cognome']."</td></tr>");
    echo("<tr><td><b>Email</b></td><td>".$queryResponse[0]['ute_email']."</td></tr>");
    echo("<tr><td><b>Vecchia Password</b></td><td>".$queryResponse[0]['ute_password']."</td></tr>");
    echo("</table>");
?>
    
<br><a href="./index.php">Torna all'inizio</a><br>   
</body>
</html>