<?php
    include_once("./Include/con_db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>citta.php - Verifica PHP 040423</title>
</head>
<body>

<hr>
<h3>Punto 5</h3>
<hr><br>


<?php
    $id_citta = $_GET['ID'];
    // $sql_citta = "
    //     SELECT * 
    //     FROM `citta` 
    //     WHERE id_citta = :id;
    // ";
    $sql_citta = "
        SELECT citta.citta AS citta, citta.provincia_nome AS provincia, citta.provincia_sigla AS sigla, regioni.regione AS  regione, regioni.area_geografica AS area
        FROM `citta`
		    INNER JOIN regioni ON citta.regione = id_regione 
        WHERE id_citta = :id;
    ";

    $bindParams_citta = [['segnaposto'=>':id','var'=>$id_citta]];
    

    $descrizione_citta = fz_sql($sql_citta,$bindParams_citta);

    //var_dump($descrizione_citta);
    ?>

    <table style="width:80%" border="1px solid black">
        <tr>
            <th><b> Campo </b></th>
            <th><b> Specifica </b></th>
        </tr>
        <?php
            if(sizeof($descrizione_citta) > 0){
                echo("<tr><td> Citta:</td><td>".$descrizione_citta[0]['citta']."</td></tr>");
                echo("<tr><td> Provincia:</td><td>".$descrizione_citta[0]['provincia']."</td></tr>");
                echo("<tr><td> Sigla Provincia:</td><td>".$descrizione_citta[0]['sigla']."</td></tr>");
                echo("<tr><td> Regione:</td><td>".$descrizione_citta[0]['regione']."</td></tr>");
                echo("<tr><td> Area Geografica:</td><td>".$descrizione_citta[0]['area']."</td></tr>");
                
            } else {
                echo("<tr><td>"." "."</td>");
                echo("<td>"." "."</td></tr>");
            }
            
            ?>
    </table>

<hr>
<h3>Punto 6</h3>
<hr><br>


<?php
    $id_citta = $_GET['ID'];
    // $sql_citta = "
    //     SELECT * 
    //     FROM `citta` 
    //     WHERE id_citta = :id;
    // ";
    $sql_citta = "
    SELECT id_cliente, nome, cognome
    FROM clienti
    WHERE id_cliente = :id
    ";

    $bindParams_clienti = [['segnaposto'=>':id','var'=>$id_citta]];
    

    $descrizione_clienti = fz_sql($sql_citta,$bindParams_citta);

    var_dump($descrizione_clienti);
   ?>
    
</body>
</html>