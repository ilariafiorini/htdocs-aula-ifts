<?php
include ("./Citta.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Città</title>
</head>
<body>
    <?php
    // selezionare le città di un'area geografica
    //scelta nella pagina precedente
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        try{
            $connessione = new PDO($dsn, "root", "");
            
            $sql="SELECT * FROM citta";
            $st = $connessione->prepare($sql);
            $st->execute();
            $lista_citta = $st->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($lista_aree);
        } catch (PDOException $e) {
            echo "Errore di connessione: ".$e->getMessage();
        }
            
    //istanziaere n nuovo oggetto della classe Citta
    //per ogni città selezionate
    foreach($lista_citta as $citta){
        $c = new Citta($citta['citta']);
        echo $c->getNome()."<br>";
    }
    

    ?>
</body>
</html>