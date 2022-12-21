<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni</title>
</head>


<body>
    <?php
    $a = 10;
    $b = 2;
    $c = $a + $b;
    echo '$c = ' . $c;
    echo "<br>";
    echo '$a + $b = $c<br>'.$a.' + '.$b.' = '. $c;
    echo "<br>";
    echo '$a + $b = $c<br>';
    echo $a.' + '.$b.' = '. $c;
    echo "<br>";
    echo '$a + $b = $c<br>';
    echo "$a + $b = $c";
    
    echo "<br>";
    echo '$a ='. $a;
    echo "<br>";
    echo '$b ='. $b;
    echo "<br>";
    echo '$a + $b ='. $a + $b;
    echo "<br>";
    echo '$a - $b ='.($a - $b);
    echo "<br>";
    echo '$a / $b ='.$a / $b;
    echo "<br>";
    echo '$a * $b ='.$a * $b;

    echo "<br>";
    $s = " stringa";
    echo $s .' '. $a;

    echo "<br>";
    
    //modulo % : resto intero della divisione
    // 5/2 - risultato intero 2, resto intero 1
    // 5 % 2 = 1 (il resto intero della divisione)
    
    echo "<br>";
    echo $a != $b;
    
    echo "<br>";
    $d = $a;
    echo $d === $a;
    echo "<br>";
    echo $e = $a;
    echo "<br>";
    echo $e == $a;
    echo "<br>";
    echo $e === $a;
    echo "<br>";
    $stringa = "1";
    $numero = 1;
    echo "<br>";
    echo $stringa === $numero;
    echo "<br>";
    echo $stringa == $numero;
    
    // operatore ternartio
    echo "<br>";
    
    echo "a = $a e b= $b";
    
    echo "<br>" .($a >= $b ? " a maggiore o uguale di b" : "b maggiore di a");
    echo "<br>";
    $risultato = ($a >= $b ? " a maggiore o uguale di b" : "b maggiore di a");
    echo "<br>" . $risultato;
    $risultato = ($a >= $b ? ($a == $b? " a uguale a b" : "a maggiore di b") : "a minore di b");
    echo "<br>" . $risultato;
    
    echo "<br>";
    
    //1 calcolare al nedia tra $a e $b
    
    echo "a = $a e b= $b";
    $media = ($a + $b) / 2;
    echo "<br>la media di a e b  è = $media";
    
    //2 Invertire il contenuto di $a e $b
    echo "<br>";
    echo "prima a = $a e b = $b <br>";

    $c = $b;
    $b = $a;
    $a = $c;
    
    echo "dopo a = $a e b = $b <br>";

    ?>
</body>
</html>