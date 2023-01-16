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
    }

    // $pippo = 0;
    // echo $pippo."<br>";
    // echo "ciao  mondo <br>";
    // $pippo = 1;
    // echo $pippo."<br>";
    
        echo 'ciao mondo!';
        for($i=0;$i < 10; $i++){
        echo $i;
        }

    ?>
</body>
</html>