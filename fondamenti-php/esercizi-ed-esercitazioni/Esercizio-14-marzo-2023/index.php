<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Form 14 marzo 2023</title>
</head>
<body>
    Seleziona area geografica
    <?php
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        try{
            $connessione = new PDO($dsn, "root", "");
            
        } catch (PDOException $e) {
            echo "Errore di connessione: ".$e->getMessage();
        }
        $sql="SELECT DISTINCT(area_geografica) FROM regioni";
        $st = $connessione->prepare($sql);
        $st->execute();
        $lista_aree = $st->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($lista_aree);
    ?>

    <form action="elenco_citta.php" method="POST">
        <select name="area_geografica">
            <?php
            foreach($lista_aree as $area){
                echo "<option>".$area['area_geografica']."</option>";
            }
            ?>
            <!-- <option>Sud</option>
            <option>Centro</option>
            <option>Nord-est</option>
            <option>Nord-ovest</option>
            <option>Isole</option> -->
        </select>
        <button >OK</button>            
    </form>
    <?php

    ?>
</body>
</html>