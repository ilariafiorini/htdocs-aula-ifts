<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
<?php

//quanti giorni mancano alla finer del mese
echo "<br> mese =".date("m");
echo "<br> giorno =".date("d");

$m = date("m");
switch($m){
    case 2:
        $giorni_del_mese = 28;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $giorni_del_mese = 30;
        break;
    default:
        $giorni_del_mese = 31;
        
}

//$d = date("d");
//$giorni_mancanti = $giorni_del_mese - $d;

$giorni_mancanti = $giorni_del_mese - date("d");
echo "<br>giorni mancanti = $giorni_mancanti"

// PEr casa: quanti giorni mancano al mio compleanno?

?>

</body>
</html>