<?php
//$con = "pippo";
function fz_sql($sql, $binds = [])
{
    global $connessione;
    if (!isset($connessione)) {
        //settiamo $con
        fz_connessione();
    }
    //2. praparo lo statement (istruzione sql = query)
    $st = $connessione->prepare($sql); //$st è un oggetto della classe PDOStatement
   
    //3. bind
    foreach ($binds as $bind) {
         $st->bindParam($bind['segnaposto'], $bind['var']);
    }
   
    //4. eseguo lo statement preparato
    $st->execute();
    //5. fetch - recupero dei dati estratti (solo con select)
    $righe = $st->fetchAll(PDO::FETCH_ASSOC);

    return $righe;
    

}

function fz_connessione()
{
    global $connessione;
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        //1. connessione
        $connessione = new PDO($dsn, "root", "");
        echo "Connessione effettuata<br>";
    } catch (PDOException $e) {
        echo "Errore di connessione :".$e->getMessage()."<br>";
    }


}

?>