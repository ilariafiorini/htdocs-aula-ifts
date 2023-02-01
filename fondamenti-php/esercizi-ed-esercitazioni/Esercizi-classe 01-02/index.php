<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi PHP 1 febbraio 2023</title>
</head>
<body>
    <?php

    $p1 = ["Primini Primo", "Secondini Secondo"];
    $p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"];
    $p3 = ["Violetti Viola", "Gaietti Gaia"];
    $partecipanti = [$p1, $p2, $p3];
    
    print_r($p1);
    echo "<br>";
    print_r($p2);
    echo "<br>";
    print_r($p3);
    echo "<br>";

    echo "<hr>";
    //inizializzazione alternativa
    // $partecipanti = [
    //     ["Primini Primo", "Secondini Secondo"],
    //     ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"],
    //     ["Violetti Viola", "Gaietti Gaia"]
    // ];

    $corsi = ["Autocad", "Informatica", "Inglese"];

    // foreach ($corsi as $indice => $materia){
    //     if ($materia == "Informatica"){
    //         echo $indice . "<br>";
    //         $informatici = $partecipanti[$indice];
    //         print_r($informatici);
    //         echo "<br>";
    //         print_r($partecipanti[$indice]);
    //         echo "<br>";
    //         $partecipanti[$indice][count($partecipanti[$indice])+1] = "Novellini Novella";
    //     // //     print_r($partecipanti[$indice]);
    //     // //     echo "<br>";
    //     // // $informatici[] = "Novellini Novella";
    //     // //     print_r($informatici);
    //     // //     echo "<br>";
    //     // // $partecipanti[$indice] = $informatici;
    //     }
    // }
    // print_r($p2);
    // echo "<br>";

    // // punto 2 come da esercizio
    // foreach($partecipanti as $p){
    //    foreach($p as $nome){
    //         echo $nome . "<br>";
    //     }
       
    // }
    //inizio dal punto 2 pimpato
    //$indice = 0;
    $somma = 0;
    //$max_partecipanti = 0;
    if ($partecipanti){
        $max_partecipanti = count($partecipanti[0]);
    }
    
    $corso_max_partecipanti = "";

    foreach($partecipanti as $i => $p){
        if($corsi[$i] == "Informatica"){ //punto 1
            $p[] = "Novellini Novella";
        }                                // punto 1

        //somma dei partecipanti
        $numero_partecipanti = count($p);
        $somma +=$numero_partecipanti; // punto 3
        //punto 4
        // if ($numero_partecipanti >= $max_partecipanti){
        //     $max_partecipanti =$numero_partecipanti;
        //     $corso_max_partecipanti = $corsi[$i];
        // } //punto 4
        
        //4 con variante
        if ($numero_partecipanti >= $max_partecipanti) {
            if ($max_partecipanti < $numero_partecipanti){
                //ho trovato un uovo max
                $max_partecipanti = $numero_partecipanti;
                $corsi_max_partecipanti =[];
                $corsi_max_partecipanti[] = $corsi[$i];


            }
            $corsi_max_partecipanti[] = $corsi[$i];
        }//punto 4
        echo "Elenco dei partecipanti al corso : ".$corsi[$i]."<br>";
        echo "<ol>";
        foreach($p as $nome){
            echo "<li>".$nome . "</li>";
            //punto 5 confrontare i vari $nome e memorizzare il più piccolo che è il nome dell'agnelllo sacrificale
        }

        echo "</ol>";
        echo "<br>";
    }
    echo "<hr>";
    // punto 3
    if ($corsi){

        echo "3) la media partecipanti vale ".($somma/count($corsi))."<br>";
        echo "<br>4) corso max partecipanti" . $corso_max_partecipanti;
        echo "<br>4 bis)";
        foreach($corsi_max_partecipanti as $c){
            echo "$c<br>";
        } 
    } else {
        "non ci sono corsi! <br>";
    }


    //punto 6 aggiungi un elemento 'corsi'..
    foreach ($partecipanti as $i => $p){
        $p['corso'] = $corsi[$i];
        print_r($p);
        echo "<br> --- <br>";
    }

 // avvio esercizio alternativo per casa
    $s1 = ['cognome' => "Rossi", 'nome' => "Mario", 'corso' => "Informatica"];
    $s1 = ['cognome' => "Rossini", 'nome' => "Maria", 'corso' => "Inglese"];
    $s1 = ['cognome' => "Rossantu", 'nome' => "Mariolino", 'corso' => "Informatica"];
    $studenti = [$s1, $s2, $s3];
    
    $nuovo_studente = ['cognome' => "Novellini ", 'nome' => "Novella", 'corso' => "Informatica"];
    $studenti[] = $nuovo_studente;
    $partecipanti_corsi = []; // n. partecipanti ad ogni corso 
    foreach($studenti as $studente){
        echo $studente['cognome'] . "<br>";

        // 
        $nome_corso = $studente['corso'];
        //if esiste la chiave $nome_corso
        if (array_key_exists($nome_corso,$partecipanti_corso)){

            $partecipanti_corsi[$studente[$nome_corso]]++;
        }
        else $partecipanti_corsi[$studente[$nome_corso]]=1;


        //guardare:  https://www.php.net/manual/en/function.array-key-exists.php

    }


    ?>
    
</body>
</html>