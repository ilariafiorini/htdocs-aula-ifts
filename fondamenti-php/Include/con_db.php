<?php

function fz_connessione(){
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    $sql =  "SELECT * FROM regioni";
            try{
                
                $con = new PDO($dsn, "root", "");
                $st = $con->prepare($sql); //$st è un oggetto della classe PDOStatement
                // echo "statement preparato";
                //3. bind - da fare
                //4. eseguo lo statement preparato
                $st->execute();
                // echo "statement eseguito";
                //5. fetch - recupero dei dati estratti (solo con SELECT)
                $righe = $st->fetchAll(PDO::FETCH_ASSOC);
    
            }catch(PDOException $e){
                die("Errore di connessione" . $e->getMessage() ) ;
            }
            return $righe;
}

?>