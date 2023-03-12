<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio elementi sccessivi</title>
</head>
<body>
    <p> dato a1 creare a2 in cui ogni elemento en  è la somma degli en elementi successivi di a1(compreso en) <br>
     esempio: a1={1,2,3,4,0} a2={1,5,7,4,0} <br> </p>
     <hr> <hr>
    <?php
    //inizializzazione di a1
    for ($i=0; $i <5 ; $i++) //{ 
        $a1[$i] = rand(0,5);
    // } 
    print_r($a1);
    echo "<br>";

    $valore = "non ancora gestito";
    for ($i=0; $i < count($a1) ; $i++) { 

        if($a1[$i] == 0 || $a1[$i] == 1){
            $valore = $a1[$i];
        }else{
            $somma_finestra = 0;
            echo "<br> i=$i a1[i]= {$a1[$i]} somma = $somma_finestra";
            for ($j=$i; ($j < ($i+$a1[$i]) AND $j< count($a1) ); $j++) {
                $somma_finestra += $a1[$j];
                echo "<br> j=$j  a1[j]= {$a1[$j]} somma = $somma_finestra" ;
                
            }
            echo "<hr>";
            $valore = $somma_finestra;

        }
        $a2[$i] = $valore;


    }
    echo "<br>";
    print_r($a2);
    ?>
</body>
</html>