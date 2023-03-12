<?php
//$con = "pippo";
function fz_sql($sql, $binds = [],$dsn = "mysql:dbname=ifts;host=127.0.0.1",$login = "root",$passwd = "")
{
    global $con;
    if (!isset($con)) {
        //settiamo $con
        fz_connessione($dsn, $login, $passwd);
    }
    //2. praparo lo statement (istruzione sql = query)
    $st = $con->prepare($sql); //$st è un oggetto della classe PDOStatement
    //echo "statement preparato";
    //3. bind - da fare
    //var_dump($binds);
    foreach ($binds as $bind) {
        //var_dump($bind);
        //$st->bindParam($bind['segnaposto'], $bind['var'], PDO::PARAM_STR);
        $st->bindParam($bind['segnaposto'], $bind['var']);
    }
    //$st->bindParam(':sigla_provincia', $nome_citta, PDO::PARAM_STR);

    //4. eseguo lo statement preparato
    $st->execute();
    //echo "statement eseguito";
    //5. fetch - recupero dei dati estratti (solo con select)
    $righe = $st->fetchAll(PDO::FETCH_ASSOC);

    return $righe;

}

function fz_connessione($dsn = "mysql:dbname=ifts;host=127.0.0.1",$login = "root",$passwd = "")
{
    global $con;
    //$dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        //1. connessione
        $con = new PDO($dsn, $login, $passwd);
        echo "connessione effettuata<br>";
    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
        echo "<br>";
    }


}

?>