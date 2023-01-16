<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    un array è una collezione sequenziale di dati individuati <br>
    dal loro indice. <br>
    se "a" è il nome dell'array il valore contenuto nella ennesima cella è <br>
    a[n-1] (gli indici partono da "0"). <br>
    in php il dato contenuto in ogni cella può avere tipo diverso uno dall'altro <br>

    <hr>
    <?php
    $a = [];
    $a[1] = 3;
    $a[2] = "pippo";
    $a[3] = 4;
    $a[4] = "pluto";

    echo $a[1] . " " . $a[2] . " " . $a[3] . " " . $a[4] . " ";
    //inizializzo l'array
    for ($i = 0; $i < 10 ; $i++){
        //$a[$i]=$i;
        $a[$i]= rand(0,100);
    }

    echo "<hr>";

    //stampo il contnuto dell'array in colonna
    for ($i = 0; $i < 10 ; $i++){
        echo "a".($i+1)." = {$a[$i]} <br>";
    }

    echo "<hr>";

    //stampo il contnuto dell'array in colonna
    for ($i = 0; $i < 10 ; $i++){
        echo "a".($i+1)."=[{$a[$i]}] ";
    }
    
    //compiti per casa: media degli elementi dell'array

    ?>
    
    


</body>
</html>