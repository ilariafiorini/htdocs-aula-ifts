<?php
include_once("Include/con_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento</title>
</head>
<body>
    <?php
        echo"<pre>";
        // print_r($_POST);
        //print_r($_FILES);
        var_dump($_FILES);
        echo"</pre>";
        foreach ($_FILES as $k=> $file) {
            $from = $file['tmp_name'];
            $to = "./img/".$_FILES[$k]['name'];
            if(!move_uploaded_file($from, $to ))
            echo "Errore nell'upload del File $k";
        }
        //echo "<img src='$to'>";

    //inserimento record
    $sql = "INSERT INTO utenti (ute_nome, ute_cognome, ute_email, ute_password, ute_icona, ute_cv)
    VALUES (:nome, :cognome,:email, :password, :icona, :cv)
    ";
    $binds=[
    ['segnaposto' => "nome", 'var'=> $_REQUEST['nome']],
    ]
    ?>
</body>
</html>