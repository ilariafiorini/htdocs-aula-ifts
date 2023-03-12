<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabili</title>
</head>

<body>
    <?php
    $var1 = 1;
    //echo $var1;
    $var1 = "stringa";
    $var2 = "pippo";
    //echo " $var1 <br> $var2"
    //echo 'ciao a tutti $var1' ;
    //stampare "variabile $var1 = stringa"
    echo 'La variabile $var1 = ';
    echo "$var1";
    echo "<br>";
    echo 'La variabile $var1 ='." $var1 <br>";
    echo ' \' La variabile $var1 ='." $var1 ' <br>";
    echo "simbolo speciale '\\' <br>";

    echo "<hr>";

    //PER CASA
    // assegnare ad una variablie la stringa "andare a casa!"
    
    // scrivere in una sola echo
    
    // l'insegnante dice "è ora di (contenuto della variabile)"

    $s = "andare   " . " a ". "casa!";
    echo $s;
    echo "<br>";
    echo "1)l'insegnante dice \"è ora di $s\"";
    echo "<br>";
    echo "2)l'insegnante dice \"è ora di " . $s ."\"";
    echo "<br>";
    echo "3)l'insegnante dice \"è ora di " . $s .'"';
    echo "<br>";
    echo '4)l\'insegnante dice "è ora di ' . $s .'"';
    echo "<br>";
    echo "5)l'insegnante dice \"è ora di $s" .'"';
    

    ?>
</body>

</html>