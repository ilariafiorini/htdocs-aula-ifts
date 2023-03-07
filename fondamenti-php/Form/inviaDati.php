<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invia Dati</title>
</head>
<body>
    <?php
    
    function data_db_2_user($data){
        $anno = substr($data,0,4);
        $mese = substr($data,5,2);
        $giorno = substr($data,8);

        return "$giorno/$mese/$anno";
    }
    
    ?>
    Dati Ricevuti dal Form!!!

    <?php

    var_dump($_GET); 
    var_Dump($_POST); 
    var_Dump($_REQUEST); 
    echo "GET :";
    print_r($_GET);
    echo "<br>";
    echo "POST :";
    print_r($_POST);
    echo "<br>";
    echo "REQUEST :";
    print_r($_REQUEST);
    echo "<br>";

    //echo $_POST['txtCognome']."<br>";
    echo"<hr>";
    foreach($_GET as $chiave => $valore)
    {
        if ($chiave == 'dataNascita'){
            echo "$chiave : ". data_db_2_user($_GET[$chiave])."<br>";
        } else{

            echo "$chiave :".$_GET[$chiave]."<br>";
        }
    }

    //per casa fare la funzione opposta
    function data_user_2_db($data)
    {
        // $data = 31/12/1990
        //altro metodo
        $a = explode("/",$data); //restituisce un array $a
        $giorno = $a[1]; 
        $mese = $a[2]; 
        $anno = $a[3];
        
        return "$anno-$mese-$giorno";
    }
    
    ?>
</body>
</html>