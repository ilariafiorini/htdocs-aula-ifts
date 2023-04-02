<?php
    include_once("./Include/con_db.php");

    var_dump($_POST);
    $postName=$_POST['nome'];
    $postSurname=$_POST['cognome'];
    $postEmail=$_POST['email'];
    $postPasswd=$_POST['passwd'];
        
        
        $sql = "
        INSERT
        INTO utenti (ute_nome, ute_cognome,ute_email,ute_password)
        VALUE (:nome, :cognome, :email, :password);
        ";
        $login = "admin";
        $passwd = "ferfo34cj71";
        $bindParams = [
            ['segnaposto'=>'nome','var'=>$postName],
            ['segnaposto'=>'cognome','var'=>$postSurname],
            ['segnaposto'=>'email','var'=>$postEmail],
            ['segnaposto'=>'passwd','var'=>$postPasswd]
        ];
        //var_dump($bindParams);
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        fz_sql_insert($sql,$bindParams,$dsn,$login,$passwd);
        //var_dump($queryResponse);

        echo("eseguito da fuori");


    header("Location: index.php");   
?>