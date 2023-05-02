<?php
session_start();
$email = $password = "";
if($_POST){

    $email = $_POST['email'];
    $password = $_POST['password'];
}

//verifica se email e password sono corrette
//collegarsi al db
//select ... from users
include("inc/conn_db.php");
//fz_connessione();
$sql = "SELECT * from users 
    WHERE use_email = :email
    AND use_password = :password";
$binds =[ 
    ['segnaposto' => 'email', 'var' => $email],
    ['segnaposto' => 'password', 'var' => $password],
];

$records = fz_sql($sql, $binds);
//$records contiene  1 record se auternticazione ok
// 0 record se autenticazione ko

if($records){
    // se true $rrecords non è vuoto
    echo "autenticazione ok";
    $_SESSION['login'] = true;
    $_SESSION['use_id'] = $records[0]['use_id'];
    $_SESSION['use_nome'] = $records[0]['use_nome'];
    
}else{
    // se false $records vuoto
    echo "autenticazione ko!!!!!!: <br><a href=index.php>riprovare</a>";
    $_SESSION['login'] = false;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Login</title>
</head>
<body>
    
</body>
</html>
