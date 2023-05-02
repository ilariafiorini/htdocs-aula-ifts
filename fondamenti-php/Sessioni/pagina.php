<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>
<body>
<?php
            if (array_key_exists('utenteDelSito', $_COOKIE)){
                echo 'Bentornato ';
            }else{
            
                echo 'Benvenuto ';

            }
            if(array_key_exists('nome', $_SESSION))
            echo " ".$_SESSION['nome']." ";
        ?>
         nel mio sito!
</body>
</html>