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

    //print_r($_POST);  
    // if ($_POST){
    //     $area_geografica = $_POST['area_geografica']; 

    // }else {
    //     $area_geografica = 'SUD';
    // }
    if ($_REQUEST){
        $area_geografica = $_REQUEST['area_geografica']; 

    }else {
        $area_geografica = 'SUD';
    }



    //$area_geografirca = ($_POST) ? 
    echo "<h1>Elenco delle citta dell'area geografica: ".$area_geografica."</h1>";
    echo "<br><a href='form_nuova_regione.php?area_geografica=$area_geografica'>Aggiungi nuova regione di questa area geografica</a><br><br>";
    //scelta nella pagina precedente
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        try{
            $connessione = new PDO($dsn, "root", "");
            
            $sql="SELECT citta FROM citta INNER JOIN regioni ON citta.regione = ID_regione WHERE area_geografica = :area_geografica";
            $st = $connessione->prepare($sql);
            $st->bindParam("area_geografica" , $area_geografica);
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