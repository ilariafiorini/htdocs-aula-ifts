<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio tipo verifica</title>
</head>
<body>



    <?php
    $start = 10;
    $repeat = 15;
    echo "numero iniziale: $start ; <br>";
    echo "numero di cicli: $repeat.<br>";
    $numero_iterazioni = 0;
    $bc1='#ccc';
    $bc2='#fff';
    $quanti_pari = 0;
    for ($i=$start; ($i>($start-$repeat)) and ($i >=0) ; $i--) {

       

        /*
        if (!($i%2)) {
            $bc = $bc1;
            $quanti_pari++;
        }
        */

        /*
        $bc = $bc2;
        if (($numero_iterazioni%4 == 0)) {
            $bc = $bc1;
            // $quanti_pari++;
        }
        */

        $bc = $bc1;
        if (!($numero_iterazioni%4 == 0)) {
            $bc = $bc2;
            // $quanti_pari++;
        }

        if (!($i%2)) {
            // $bc = $bc1;
            $quanti_pari++;
        }


        // $numero_iterazioni++;
        echo "<div style='background-color:$bc'>";
        echo (++$numero_iterazioni).") :";
        echo "$i - <span style='color:#f00' >".($i*2)."</span>";
        echo "<br>";
        echo "</div>";
        # code...
    }

    echo "<hr>";
    echo '$numero_iterazioni'.": "."'".$numero_iterazioni."'";
    echo "<br>";
    echo "Numeri pari: "."'".($numero_iterazioni+$quanti_pari)."'";
    
    ?>

</body>
</html>