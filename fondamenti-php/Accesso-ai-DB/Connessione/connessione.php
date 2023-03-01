<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connessione.php</title>
</head>
<body>
    <?php
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        try{
            //codice che può lanciare una Eccezione
            // 1. connessione
            $con = new PDO($dsn, "root", "");
            // echo "connessione effettuata";
            //2. preparo lo statement (istruzione (QUERY) SQL)
            //* $st = $con->prepare("SELECT * FROM regioni "); //$st è un oggetto della classe PDOStatement
            //* $st = $con->prepare("SELECT * FROM clienti "); //$st è un oggetto della classe PDOStatement
            $sql =  "SELECT * FROM citta 
                    INNER JOIN regioni 
                    ON regioni.ID_regione = citta.regione 
                    WHERE area_geografica = 'sud' ";
            $st = $con->prepare($sql); //$st è un oggetto della classe PDOStatement
            // echo "statement preparato";
            //3. bind - da fare
            //4. eseguo lo statement preparato
            $st->execute();
            // echo "statement eseguito";
            //5. fetch - recupero dei dati estratti (solo con SELECT)
            $righe = $st->fetchAll(PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            echo "Errore di connessione : ";
            echo $e->getMessage();
        }

        //se tutto è andato bene $righe contiene l'array bidimensionale dei
        //record estratti

        // print_r($righe);
        echo "<pre>";
        var_dump($righe);
        echo "</pre>";


        //per casa
        //query di insert sulla tabella regioni
        // se volete esiste un metodo di PDOStatement che restituisce il record  appena inserito
        //poi la delete della stessa  regione appena inserita

    ?>
</body>
</html>