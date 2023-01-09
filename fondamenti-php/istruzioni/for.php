<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>

    <?php
        for($i=1 ; $i <=10 ; $i++){
            //if(($i%2)== 1){
            //    echo "<p style=background-color:#dddddd>";
            //}else{
            //    echo "<p style=background-color:#ffffff>";
            //}
                
            //echo "$i) ciao<br>";
            //echo $i;
            
            if(($i%2)== 1){
                //echo "$i multiplo di 2<br>";
                echo "<p style=background-color:#ccc>";
                echo "$i NON";
            }else{
                echo "<p style=background-color:#fdd>";
                echo "$i ";
                
            }
            
            echo " è multiplo di 2<br>";
            
        }
        echo "<p style=background-color:#f77>";
        echo "i in uscita è uguale a: $i ";
    //echo "i=$i";
    echo "<hr>";    
    //contare i multipli di 3 da $inizio  per $iterazioni iterazioni
    $multipli = 0;
    $inizio = 5;
    $iterazioni = 10;
    for($i=$inizio; $i<=($inizio+$iterazioni); $i++){
        if (!($i%3)){ //è multiplo
            //$i%3 == 1 -> non è multiplo
            //$i%3 -> identico alla riga sopra (NON multiplo)
            //! ($i%3) -> negazione di quello sopra (è multiplo)
            
            echo "$i: trovato multiplo di tre<br>";
            $multipli++;
        }
    }
    echo " trovati $multipli multipli di 3 <br>";
    echo " i multipli di 3 tra $inizio e " . $inizio + $iterazioni . " sono $multipli";
    

echo "<hr>";    

//elencare i primi $numeri numeri multipli di $multiplo 
// da $inizio a $fine
$inizio = 1;
$fine = 100;
$multiplo = 3;
$numeri = 7;
$num = 0;
//$iterazioni = 10;
for($i=$inizio; ($i<= $fine && !$finito); $i++){
    if (!($i % $multiplo)){
        $num++;
        echo "$num $i <br>";
            if ($num == $numeri)
                //break;
                $finito = true; 
    }
    
}
echo " trovati $num multipli di $multiplo <br>";
echo " i multipli di $multiplo tra $inizio e " . $fine. " sono $num";
?>

</body>
</html>