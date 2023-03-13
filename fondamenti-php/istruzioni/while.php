<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>

    <?php
    //PER CASA somma dei soli n pari
    
    // for($i = 1; $i <= 10; $i++){
    //     echo "$i<br>";
    // }
    
    //stesso del for ma col while
    // $i=1;
    // while($i<=10){
    //     // echo $i++."<br>";
    //     echo "$i<br>";
    //     $i++;
    // }

    //scrivere i primi interi positivi a partire da $start
    //che sommati raggiungano
    //il target %target
    
    
    $target = 10;
    $start = 3;
    $somma = 0;
    //$i = $start;
    echo "<hr>";
    echo "fatto col For<br>";
    echo "inizio la somma da $start ";
    for ($i = $start; ($somma < $target);$i++){
        $somma = $somma + $i;
        if($somma <= $target){

           // echo $i . "<br>";
        }
    }
    echo "fino a $i <br>";
    echo "somma = $somma <br>";
    
    
    echo "<hr>";
    echo "fatto col While<br>";
    $somma = 0;
    $i = $start -1;
    echo "inizio la somma da ".($i+1)." ";
    while($somma < $target){
        $i++;
        $somma += $i;
        // if($somma > $target){

        // }
        //echo $somma  . "<br>";
    }
    $i--;
    echo "fino a $i <br>";
    echo "<br>somma =$somma";

    ?>
    
</body>
</html>

