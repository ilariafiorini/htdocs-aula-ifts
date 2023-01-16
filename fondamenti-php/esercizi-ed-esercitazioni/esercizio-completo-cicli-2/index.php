<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Completo sui cicli #2</title>
</head>
<body>
    <?php
    echo "<hr>";
    echo "punto 1 <hr>";
    
    //numero iniziale assegnato
    $inizio = 10;

    //numero di ripetizioni 
    $ripetizioni = 100;
    
    //setto il numero del giorno corrente
    $giorno_corrente = date("d");

    // setto a zero la variabile che conterà le ricorrenze di $i multiplo di 10 e 
    $multiplo_di_dieci = 0;

    for(($i = $inizio); ($i < ($inizio+$ripetizioni)) ; $i++){
        
        
        // alterno il colore del background con due colori a caso
        if(($i%2)== 1){ 
            echo "<p style=background-color:#ccc>";
        }else{
            echo "<p style=background-color:#fdd>";
        }
        
        if ($i == $giorno_corrente){ // se $i è uguale al giorno corrente lo imposto rosso e in grassetto
            echo ($i-1).' <b style=color:#f00>'.$i." </b> ".($i+1)."<br>" ;
            
        }else { // se $i è diverso dal giorno corrente lo imposto rosso normale (non grassetto)
            
            echo ($i-1).' <span style=color:#f00>'.$i." </span> ".($i+1)."<br>" ;
        }
        
        if ($i%10 == 0){
            $multiplo_di_dieci++;
        }
        //echo "$i NON";
        
    }
    echo "<hr>";
    echo "punto 2 <hr>"; 
    echo '"'.'$inizio'.": '$inizio' ".'$ripetizioni'.": '$ripetizioni' ".'"'." <br>";
    echo '"' . "ultimo numero considerato: '" . ($i - 1) . "'" . '"'."<br>";
    echo "un multiplo di 10 è stato scritto: $multiplo_di_dieci volte <br>";
    
    echo "<hr>";
    echo "punto 3 <hr>";

    //ricavo l'anno corrente
    $anno_corrente = date("y");
    
    /**nella valutazione della condizione per proseguire il ciclo for
     * considero anche che $i non deve mai esser3e superiore all'anno corrente
     */

    for (($i = $inizio); (($i < ($inizio + $ripetizioni)) && ($i <= $anno_corrente)); $i++) {

        // alterno il colore del background con due colori a caso
        if (($i % 2) == 1) {
            echo "<p style=background-color:#ccc>";
        } else {
            echo "<p style=background-color:#fdd>";
        }

        if ($i == $giorno_corrente) { // se $i è uguale al giorno corrente lo imposto rosso e in grassetto

            echo ($i - 1) . ' <b style=color:#f00>' . $i . " </b> " . ($i + 1) . "<br>";

        } else { // se $i è diverso dal giorno corrente lo imposto rosso normale (non grassetto)

            echo ($i - 1) . ' <span style=color:#f00>' . $i . " </span> " . ($i + 1) . "<br>";
        }

    }
    ?>    
</body>
</html>