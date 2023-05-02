<?php
//deve essere la prima istruzione

setcookie('utenteDelSito', 1, time()-1);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookie</title>
    </head>
    <body>
        <?php
            if (array_key_exists('utenteDelSito', $_COOKIE)){
                echo 'Bentornato ';
            }else{
            
                echo 'Benvenuto ';

            }
        ?>
         nel mio sito!
        <br><br>
        Elenco dei cookie inseriti:
        <?php 
        print_r($_COOKIE);
        ?>
</body>
</html>