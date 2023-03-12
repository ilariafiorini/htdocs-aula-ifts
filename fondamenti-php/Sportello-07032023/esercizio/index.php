<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Sportello 07 Marzo 2023</title>
</head>
<body>
    <p>
    Definire la funzione che restituisce l'elenco delle regioni memorizzte nel DB<br>
    <i>function nome_funzione ($nome_regione)</i>
    </p>
    <hr>

    <?php

    //estrarre dal db tutti i dati della regione $regione
    function connessione($sql){

        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
            try{
                
                $con = new PDO($dsn, "root", "");
                //$sql =  "SELECT * FROM regioni";
                $st = $con->prepare($sql); //$st è un oggetto della classe PDOStatement
                // echo "statement preparato";
                //3. bind - da fare
                //4. eseguo lo statement preparato
                $st->execute();
                // echo "statement eseguito";
                //5. fetch - recupero dei dati estratti (solo con SELECT)
                $records = $st->fetchAll(PDO::FETCH_ASSOC);
    
            }catch(PDOException $e){
                die("Errore di connessione" . $e->getMessage() ) ;
            }
            return $records;
    }//connessione()

    function fz_regione($r, $regioni){
        foreach ($regioni as $regione) {
            echo $r."<br>";
            echo $regione['regione'];
            var_dump($regione);
            if  ($regione['regione'] == $r){
                echo "<br>Match trovato !<br>";
                return $regione;
            }

        }
        return [];


    }//fz_regioni()

    $sql =  "SELECT * FROM regioni";    
    $regioni = connessione($sql);
    $regione = "Lazio";
    $risultato = fz_regione($regione, $regioni);

    var_dump($regioni);
    var_dump($risultato);

    if ($risultato){// se array vuoto allora è false
        echo "trovata la regione: ".$regione." con area geografica ". $risultato['area_geografica'];

    } else {
        echo " regione non trovata";
    }

    //definisco la funzione che estrae da $regioni la regione $regione
    
    ?>
    
</body>
</html>