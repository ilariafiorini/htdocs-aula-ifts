<?php
    include_once("./Include/con_db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista_citta.php - Verifica PHP 040423</title>
</head>
<body>

<hr>
<h3>Punto 2</h3>
<hr><br>

<?php
 $stringa_di_ricerca = "%".$_POST['searchString']."%";
 
 //echo($stringa_di_ricerca);
 
 
 
 $binds=[['segnaposto' =>'string', 'var'=>$stringa_di_ricerca]];
 $dsn = "mysql:dbname=ifts;host=127.0.0.1";
 $login = "root";
 $passwd = "";
 
 $sql = "
 SELECT id_citta, citta.citta 
 FROM citta
 WHERE citta.citta LIKE :string
 OR citta.provincia_nome LIKE :string
 ";
 
 $binds=[['segnaposto' =>'string', 'var'=>$stringa_di_ricerca]];
 
 $lista_citta=fz_sql($sql, $binds);
 
 echo("<br>Sono statae rovate ".count($lista_citta)." occorrenze di città<br>");
 
 
 ?>
    
<hr>
<h3>Punto 3</h3>
<hr><br>

<table style="width:80%" border="1px solid black">
        <tr>
            <th><b> ID </b></th>
            <th><b> Città </b></th>
        </tr>
        <?php
            if(sizeof($lista_citta) > 0){
                
                foreach ($lista_citta as $record){
                    echo("<tr><td>".$record['id_citta']."</td>");
                    echo("<td>".$record['citta']."</td></tr>");
                }
            } else {
                echo("<tr><td>"." "."</td>");
                echo("<td>"." "."</td></tr>");
            }
            
            ?>
    </table>


<hr>
<h3>Punto 4</h3>
<hr><br>


<table style="width:80%" border="1px solid black">
        <tr>
            <th><b> ID </b></th>
            <th><b> Città </b></th>
            <th><b> Link </b></th>
        </tr>
        <?php
            if(sizeof($lista_citta) > 0){
                
                foreach ($lista_citta as $record){
                    echo("<tr><td>".$record['id_citta']."</td>");
                    echo("<td>".$record['citta']."</td>");
                    echo("<td><a href="."./citta.php?ID=".$record['id_citta'].">Esplora Città</a></td></tr>");
                }
            } else {
                echo("<tr><td>"." "."</td>");
                echo("<td>"." "."</td>");
                echo("<td>"." "."</td>/tr>");
            }
            
            ?>
    </table>

</body>
</html>