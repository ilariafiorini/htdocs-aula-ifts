<?php
include("Include/con_db.php");
//include("Include/funzioni.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio per casa del 10 marzo 2023</title>
</head>
<body>
    <?php


    //punto 1 - Connessione
    echo "<hr>";
    echo "<h3>Punto 1 </h3>";
    echo "<hr>";
    
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    $login = "admin";
    $passwd = "ferfo34cj71"; 
    
    fz_connessione($dsn,$login,$passwd);
    
    
    //punto 2 - Elenco di tute le città del sud
    echo "<hr>";
    echo "<h3>Punto 2 - Elenco delle città del SUD</h3>";
    echo "<hr>";
    
    
    
    
    $sql2 =
    "SELECT DISTINCT citta.citta
    FROM citta
    INNER JOIN regioni ON citta.regione = regioni.ID_regione
    where regioni.area_geografica = 'sud';"
    ;
    
    //echo $sql2;
    //restituisce l'elenco di tutte le citta del SUD
    
    $lista_citta = fz_sql($sql2,[],$dsn,$login,$passwd);
    
    //var_dump($lista_citta);
    
    
    echo "<ul>";
    foreach ($lista_citta as $citta){
        echo "<li>".$citta['citta']."</li>";
        
    }
    echo "</ul>";
    
    //punto 3 - Numero delle città elencate
    // metodo 1 - calcolate contando i risulatti della query $sql2
    echo "<hr>";
    echo "<h3>Punto 3 - Numero delle città elencate (metodo 1)</h3>";
    echo "<h4>calcolate contando i risulatti della query del punto 2</h4>";
    echo "<hr>";
    
    echo "Ci sono ".count($lista_citta)." città appartenenti al SUD<br>";
    
    
    //punto 3 - Numero delle città elencate
    // metodo 1 - calcolate con un a query  apposita 
    echo "<hr>";
    echo "<h3>Punto 3 - Numero delle città elencate (metodo 1)</h3>";
    echo "<h4>calcolate conuna query apposita</h4>";
    echo "<hr>";
    
    
    
    $sql3 =
    "SELECT DISTINCT count(*) AS numerocitta
    FROM citta
    INNER JOIN regioni ON citta.regione = regioni.ID_regione
    where regioni.area_geografica = 'sud'"
    ;
    //restituisce il numero delle città del SUD
    
    $numero_citta = fz_sql($sql3,[],$dsn,$login,$passwd);
    
    //var_dump($numero_citta);
    
    echo "Ci sono ".$numero_citta[0]['numerocitta']." città appartenenti al SUD<br>";
    
    
    
      
     //punto 4 - regione del sud con più città
     // alcolata cercando il valore max dai risultati di una query che restituisce il numero delle città di ogni regione
     echo "<hr>";
     echo "<h3>Punto 4 - Regione del SUD con più città </h3>";
     echo "<hr>";
     
     
     $sql4 = 
     "SELECT regioni.regione AS regionesud, COUNT(*) AS numerocitta
    FROM citta
    INNER JOIN regioni ON citta.regione = regioni.ID_regione
    where regioni.area_geografica = 'sud'
    GROUP BY regioni.regione"
    ;
    //si ottiene la tabella con sei righe: regione 	numerocitta 
    //  	
    // Abruzzo 	16
    // Basilicata 	1
    // Calabria 	4
    // Campania 	89
    // Molise 	2
    // Puglia 	19
    
    //  che va poi ciclata per trovare la regione con numerocitta maggiore 
    
    $regioni = fz_sql($sql4,[],$dsn,$login,$passwd);
    //var_dump($regioni);
    $regionemax=$regioni[0]['regionesud'];
    $cittamax=$regioni[0]['numerocitta'];
    for ($i = 1; $i < count($regioni); $i++ ){
        if ($regioni[$i]['numerocitta']>$cittamax){
            $regionemax=$regioni[$i]['regionesud'];
            $cittamax=$regioni[$i]['numerocitta'];
        }
    }
    echo "Regione con più città: ".$regionemax." (".$cittamax." città).<br>";
    
    //punto 5 - 6  Creazione della classe e dei metodi
    echo "<hr>";
    echo "<h3>Punti 5 e 6 - Creazione della classe Regione e del metodo , valorizzaNumCitta </h3>";
    echo "<hr>";
    class Regione {
        private $nome = "";
        public $numeroCittaCollegate = 0;

        /**
         * 
         * Construttore della classe Regione
         * 
         * @param  string $nomeRegione il nome della regione che si vuole inizializzare
         * @return void
         */
        public function __construct($nomeRegione){
            $this->nome = $nomeRegione; 
        }
        
        /**
         * Restituisce il nome della Regione
         * @return string
         */
        public function getName(){
            return $this->nome;
        }

        /**
         * Valorizza la variabile interna privata col numero di citta
         * appartenenti alla Regione secondo i dati contenuti nel DB ifts
         *
         * @return void
         */
        public function valorizzaNumCitta(){

            $sql= 
                "SELECT regioni.regione AS regionecercata, COUNT(*) AS numerocitta
                FROM citta
                INNER JOIN regioni ON citta.regione = regioni.ID_regione
                where regioni.regione = :nomeregione
                GROUP BY regioni.regione";
            
            $dsn = "mysql:dbname=ifts;host=127.0.0.1";
            $login = "admin";
            $passwd = "ferfo34cj71";
            $binds[0] = ['segnaposto'=>':nomeregione', 'var'=>$this->nome];
            //var_dump($binds);
            $regione_numero_citta = fz_sql($sql,$binds,$dsn,$login,$passwd); 
            //ar_dump($regione_numero_citta);
            $this->numeroCittaCollegate = $regione_numero_citta[0]['numerocitta'];
        }

        /**
         * restituisce il numero di citta della Regione
         *
         * @return int
         */
        public function getNumberOfCity(){
            return $this->numeroCittaCollegate;
        }
    }
    
    $campania = new Regione('Campania');
    $campania->valorizzaNumCitta();
    echo"In ".$campania->getName()." ci sono ".$campania->getNumberOfCity()." città. <br>";

    $lombardia = new Regione('Lombardia');
    $lombardia->valorizzaNumCitta();
    echo"In ".$lombardia->getName()." ci sono ".$lombardia->getNumberOfCity()." città. <br>";
    
    ?>
</body>
</html>