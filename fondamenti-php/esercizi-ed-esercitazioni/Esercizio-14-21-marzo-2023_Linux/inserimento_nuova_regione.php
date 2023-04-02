<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
<?php
        //$regione = 'romagna';
        //$area_geografica = "Nord-est";
        $regione = $_REQUEST['regione'];
        $area_geografica = $_REQUEST['area_geografica'];
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        try{
            $connessione = new PDO($dsn, "admin", "ferfo34cj71");
            
            $sql="INSERT INTO regioni (regione, area_geografica)
        VALUES (:regione, :area_geografica)";
        $st = $connessione->prepare($sql);
        $st->bindParam('regione', $regione);
        $st->bindParam('area_geografica', $area_geografica );
        $st->execute();
    } catch (PDOException $e) {
        echo "Errore di connessione: ".$e->getMessage();
    }
    header("Location: index.php");
        //var_dump($lista_aree);
    ?>
    
</body>
</html>