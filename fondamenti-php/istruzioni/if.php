<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<body>
    <?php
    $x = 1;
    $y = 2;
    echo "x vale $x, y vale $y <br>";
    echo " x è maggiore di y?<br>";
    if( $x > $y ) {
        echo "condizione vera!<br>";
        $m = $x;
    } else {
        echo "condizione falsa!<br>";
        $m = $y;
    }
    
    echo "il max tra $x e $y è $m <br>";
    
    $x = 10;
    $y = 2;
    echo "x vale $x, y vale $y <br>";
    
    echo " x è maggiore di y?<br>";
    if( $x > $y ) {
        echo "condizione vera!<br>";
        $m = $x;
    } else {
        echo "condizione falsa!<br>";
        $m = $y;
    }
    echo "il max tra $x e $y è $m <br>";
    
    $x = 5;
    $y = 5;
    echo "x vale $x, y vale $y <br>";
    echo " x è maggiore o uguale di y?<br>";
    if( $x >= $y ) {
        if($x==$y){
            echo "x è uguale a y <br>";
            $m = $x;
        }
        echo "condizione vera!<br>";
        $m = $x;
    } else {
        echo "condizione falsa!<br>";
        $m = $y;
    }
    echo "il max tra $x e $y è $m <br>";

    echo "<hr>";
    
    //Un supermercato offre una politica di sconto ai propri clienti: con l’acquisto di 3 prodotti 
    //applica il 10% di sconto sull’oggetto meno costoso. Determinare il totale 
    //(imponibile + iva, supponendo l’iva al 22%)

    $p1 = 10; //costo prodotto 1
    $p2 = 9; //costo prodotto 2
    $p3 = 8; //osto prodotto 3

    //trovare il minore dei 3 costi

    if ($p1<$p2){
        if($p1<$p3){
            $min = $p1;
            echo "$p1 minore";
            $p1 = $p1 * 0.9;
            //$tot = ($p1 * 0.9) + $p2 * $p3;
        }else{
            $min = $p3;
            echo "$p3 minore";
            $p3 = $p3 * 0.9;
            //$tot = $p1 + $p2 + ($p3 * 0.9);
        }
    }else{
        if ($p2<$p3){
            $min = $p2;
            echo "$p2 minore";
            $p2 = $p2 * 0.9;
            //$tot = $p1($p2 * 0.9) + $p3;
        }else{
            $min = $p3;
            echo "$p3 minore";
            $p3 = $p3 * 0.9;
            //$tot = $p1 + $p2 + ($p3 * 0.9);
            
        }

    }
    $tot = $p1 + $p2 + $p3;
    echo "<br>totale = $tot";
    echo "<br>".'$tot' . "= $tot";
    echo "<br>".'$p1' . "= $p1";
    echo "<br>".'$p2' . "= $p2";
    echo "<br>".'$p3' . "= $p3";

    //scorporo l'iva
    $iva = 22;
    $imponibile = $tot / (100 + $iva) * 100;
    $quotaiva = $tot - $imponibile;
    echo "<br>imponibile = $imponibile";
    echo "<br>iva = $quotaiva";

    

    ?>

</body>
</html>