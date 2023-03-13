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

   function mia_somma($a, $b){
    //    $ris = $a + $b;
    //    return $ris;
       $a += $b;
       return $a;
       echo "ciao"; // non viene mai eseguito
   }

   $a1 = 13;
   $a2 = 15;

   $r = mia_somma($a1, $a2);
   echo "la somma di $a1 e $a2 è: $r";


   ?>
</body>
</html>