<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scommessa</title>
</head>
<body>
    <?php
    /* il cliente del centro scommesse
    scieglie un numero $numero e scommette
    che sia uguale alla media (arrotondata all'intero
    recedente) di $estrazioni di numeri casuali tra 1 e 10
    Verificare se ha vinto
    */
    $numero = 2;
    $estrazioni = 5;
    $somma = 0;
    for ($i = 0 ; $i < $estrazioni ; $i++){
        $r = rand(1, 10);
        echo $r." ";
        //$somma = $somma + $r;
        $somma += $r;
    }
    echo "<br>somma = $somma";
    $media = $somma / $estrazioni;
    $media_arrotondata = (($somma-($somma%$estrazioni))/$estrazioni);
    echo "<br>media = $media";
    echo "<br>media arrotondata = $media_arrotondata";
    if($media_arrotondata == $numero){
        echo "<br> Hai vinto!";
    }else{
        echo "<br> Ritenta!";
    }
    ?>
</body>
</html>