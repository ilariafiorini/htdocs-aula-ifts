<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nuova Regione</title>
</head>
<body>
    Inserimento nuova regione nell'area geografica:
    <?php echo"<b>".$_REQUEST['area_geografica']."<br></b>"; ?>
    <form action="inserimento_nuova_regione.php" method="POST">
        Regione<input type="text" name="regione" value="<?php if(array_key_exists('regione', $_REQUEST))  echo$_REQUEST['regione']?>">
        Area Geografica<input type="text" name="area_geografica" value="<?php echo$_REQUEST['area_geografica']?>">
        <button>Inserisci</button>
        
    </form>
    
</body>
</html>