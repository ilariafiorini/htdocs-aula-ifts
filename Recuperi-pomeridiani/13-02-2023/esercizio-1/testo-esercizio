<?php
function min_in_array($a)
{
    //$min = 0; ottimizzazione, vedi sotto
    //$min = $a[0];

    foreach ($a as $v) {
        if (!isset($min)) { //entro SOLO alla prima iterazione
            //non è settata se è la prima iterazione
            $min = $v; //metto in min il primo valore
        }

        if ($min > $v) {
            $min = $v;
        }
    }
    return $min;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //Scrivere una funzione che riceve come parametro di ingresso un array e 
    //restituisce il valore del primo elemento in ordine crescente 
    
    $a = ['nome' => "primo", 'a' => "aaa", 'b' => "terzo"];
    //echo $a[0]; NON SI PUO' FARE
    $a = [10, 1, 2, 3, 4];
    $primo = min_in_array($a);
    echo "il primo è: " . $primo;


    //definire la funzione somma2 che somma 2 numeri
    //definire la funzione somma3 che somma 3 numeri, usando la somma2
    
    function mediaInventata2($x, $y)
    {
        return ($x + $y) / 2;
    }
    function mediaInventata3($a, $b, $c)
    {
        //return $a + $b + $c;
        return mediaInventata2(mediaInventata2($a, $b), $c);
    }

    $m = mediaInventata3(1, 3, 3);
    echo "<br>mediaInventata3 = "
        . number_format($m, 2, ",", ".");

    ?>


</body>

</html>