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
    /** 
     * calcola il fattoriale di un numero
     * @param integer $valore: valore del quale calcolare il fattoriale
     * @return integer
     */

    function fattoriale($valore){
        if ($valore == 1){
            return 1;
        } else {
            return fattoriale($valore - 1) * $valore;
        }
    } //fattoriale

    // $pippo = 0;
    // echo $pippo."<br>";
    // echo "ciao  mondo <br>";
    // $pippo = 1;
    // echo $pippo."<br>";
    $a1 = [];
    $a2 = [];
    echo 'ciao mondo! <br>';
    for($i=0;$i < 10; $i++){
        $a1[$i] = $i;
        $a2[$i] = fattoriale($i);
    echo $i."<br>";
    } //for
    for ($i = 0; $i < 10; $i++) {
        echo "{$a1[$i]} => {$a2[$i]} <br>";
    }       
    ?>
</body>
</html>