<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica PHP del 20 gennaio 2023</title>
</head>
<body>
    <?php
    $numero_partecipanti = rand(10 , 100);
    //test
    echo "numero partecipanti $numero_partecipanti <br>";
    //test
    
    $punteggi [] = 0;
    echo "<ul>";
    
    for ($i=0; $i < ($numero_partecipanti - 5) ; $i++){
        $punteggi[$i]=rand(0 ,10);
    }
    echo $punteggi[0];
    $punteggio_min = $punteggi[0];
    $numero_bocciati = 0;
    $numero_promossi = 0;
    $somma_bocciati = 0;
    //test
    for ($i=0; $i < count($punteggi) ; $i++){
        if ($punteggio_min > $punteggi[$i]){ //cerco ilpunteggio minore
            $punteggio_min = $punteggi[$i];
            //echo $punteggio_min;
        }
        //echo "punteggio $i = $punteggi[$i] <br>";
        //test
        if ($punteggi[$i] > 5){ //punteggi sufficienti
            $numero_promossi++; //calcolo il numero dei promossi
            $prefisso = "<b>";
            $suffisso = "</b><br>";
        }else{ //punteggi insufficienti
            $numero_bocciati++; //calcolo il numero dei bocciati
            $somma_bocciati = $somma_bocciati + $punteggi[$i];
            $prefisso = "<i>";
            $suffisso = "</i><br>";
        }
        if ($i%2 == 0){
            //echo "<p style='background-color:#f99'>".$prefisso."punteggio $i = $punteggi[$i]".$suffisso. "</p>";
            echo "<li style='background-color:#f99'>".$prefisso."punteggio $i = $punteggi[$i]".$suffisso. "</li>";
            
        } else {
            //echo "<p style='background-color:#fff'>".$prefisso."punteggio $i = $punteggi[$i]".$suffisso. "</p>";
            echo "<li style='background-color:#fff'>".$prefisso."punteggio $i = $punteggi[$i]".$suffisso. "</li>";
            
           
        }
        
        
        
    }//finefor
    echo "</ul>";
    $punt_min = 0;
    $num_punt_max = 0;
    $num_punt_min = 0;

    for ($i=0; $i < count($punteggi); $i++){

        // echo $punteggi[$i];

        if ($punteggi[$i] == 10){ //conto chi ha preso 10
              $num_punt_max++;
        }
        if ($punteggi[$i] < $punteggio_min){ // trovo il punteggio minimo
              $punt_min++;
        }
      
    }
    for ($i=0; $i < count($punteggi); $i++){

        //echo $punteggi[$i];

        if ($punteggi[$i] == $punt_min){
              $num_punt_min++;
        }
      
    }
    echo"<table><tr><td>";
    echo "il punteggio minimo è:".$punt_min."<br>";
    echo $num_punt_min." persone hanno preso il punteggio minimo:".$punt_min."<br>";
    echo $num_punt_max." persone hanno preso il punteggio massimo: 10 <br>";
    echo "ci sono $numero_bocciati bocciati<br>";
    echo "ci sono $numero_promossi promossi<br>";
    $media_bocciati = ($somma_bocciati / $numero_bocciati);
    echo "il punteggio medio dei bocciati è di: $media_bocciati<br>";
    //echo "<br>".$num_punt_min ." ". $num_punt_max;
    echo "</td></tr></table>";
    ?>
</body>
</html>