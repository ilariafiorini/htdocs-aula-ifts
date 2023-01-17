<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demografica elezioni</title>
</head>
<body>
    <?php
    // inizializzo l'array $eta
    $numero_abitanti = 100;
    $eta = []; 
    for ($i=0; $i < $numero_abitanti ; $i++){
        $eta[$i] = rand(0,90);
    }

    $num_neonati = 0;
    //$max_eta = 0;
    $max_eta = $eta[0]; //inizializzo al primo valore dell'array (lo posso fare perchè lìarray è gia stato inizializzato)
    $somma_eta_maggiorenni = 0;
    $num_maggiorenni = 0;
    for ($i=0; $i < count($eta); $i++) {
        if ($eta[$i]> $max_eta){
            $max_eta = $eta[$i];
        }
        if ($eta[$i] == 0){
            $num_neonati++;
        }
        if ($eta[$i] >= 18){
            $somma_eta_maggiorenni += $eta[$i];
            $num_maggiorenni++;
            echo"<b>" .$eta[$i] . "</b><br>";
            
        } else{
            echo "<i>";
            $color = "#000;";
            if ($eta[$i] == 0){
                $color = "#f00;";

            }
            echo "<span style='color:$color'>".$eta[$i];
            echo "</i><br>";
            //echo $eta[$i] ."<br>";

        }
    }

    echo "<hr>";
    //echo "<table border=1><tr>"
    echo"<table border=1 style='border-collapse: collapse;'><tr>";
    echo "<td>l'abitante più anziano ha: $max_eta  anni<br>";
    echo "ci sono: $num_neonati  neonati<br></td></tr></table>";
    echo "<hr>";
    echo " età media dei maggiorenni:" . (($somma_eta_maggiorenni-($somma_eta_maggiorenni%$num_maggiorenni)) / $num_maggiorenni) . "<br>";
    echo "ci sono $num_maggiorenni  maggiorenni, quindi occorrono $num_maggiorenni schede elettorali<br>";
    
    //print_r($eta) //NON VA BENE;
    // echo "<hr>";
    // var_dump($eta);

    ?>
    
</body>
</html>