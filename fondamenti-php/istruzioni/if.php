<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<body>
    <?php
    $x = 1;
    $y = 2;
    echo "x vale $x, y vale $y <br>";
    echo " x è maggiore di y?<br>";
    if( $x > $y ) {
        echo "condizione vera!<br>";
        $m = $x;
    } else {
        echo "condizione falsa!<br>";
        $m = $y;
    }
    
    echo "il max tra $x e $y è $m <br>";
    
    $x = 10;
    $y = 2;
    echo "x vale $x, y vale $y <br>";
    
    echo " x è maggiore di y?<br>";
    if( $x > $y ) {
        echo "condizione vera!<br>";
        $m = $x;
    } else {
        echo "condizione falsa!<br>";
        $m = $y;
    }
    echo "il max tra $x e $y è $m <br>";
    
    $x = 5;
    $y = 5;
    echo "x vale $x, y vale $y <br>";
    echo " x è maggiore o uguale di y?<br>";
    if( $x >= $y ) {
        if($x==$y){
            echo "x è uguale a y <br>";
            $m = $x;
        }
        echo "condizione vera!<br>";
        $m = $x;
    } else {
        echo "condizione falsa!<br>";
        $m = $y;
    }
    echo "il max tra $x e $y è $m <br>"
    

    ?>
</body>
</html>