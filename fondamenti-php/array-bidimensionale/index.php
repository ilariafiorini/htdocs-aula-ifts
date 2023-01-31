<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array bidimensionale</title>
</head>
<body>
    <?php
    $s1=['nome' => "Mario", 'cogn' => "Rossi", 'voto' => 10];
    $s2=['nome' => "Giacomoo", 'cogn' => "Verdi", 'voto' => 8];
    $s3=['nome' => "Maria", 'cogn' => "Rossini", 'voto' => 5];
    $s4=['nome' => "Osvaldo", 'cogn' => "Faustini", 'voto' => 3];
    $S=[$s1, $s2, $s3, $s4];

    print_r($s1);

    echo "<br>".$S[0]['nome'];
    echo "<br>".$S[0]['cogn'];
    echo "<br>".$S[0]['voto'];
    echo "<br>".$S[1]['nome'];
    echo "<br>".$S[1]['cogn'];
    echo "<br>".$S[1]['voto'];

    echo "<hr>";
    foreach($S as $array_interno ){
        // foreach($array_interno as $campo => $valore){
        //     echo "<br>".$campo." uguale a: ".$valore;

        // }
        echo "<br>";
        foreach($array_interno as $campo => $value){
            if($campo == "voto"){
                echo " ha preso: ".$value;
                if($value < 6){
                    echo " e deve ritentare";
                }
            }else{
                echo "$value ";
            }

        }

    }
    echo "<hr>";
    echo "<table>";
    foreach($S as  $studente){
        echo "<tr>";
        echo "<td>";
        echo $studente['nome'];
        echo "</td><td>";
        echo $studente['cogn'];
        echo "</td><td>";
        echo $studente['voto'];
        echo "</td></tr>";
    }
    echo "</table>";


    //per casa ripetere la tavbella sopra 
    //senza conoscere le chiavi dei singoli elementi di $s 
    // (con due foreach innestati)
    ?>
    
</body>
</html>