<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach 31 gennaio 2023</title>
    </head>
    <body>
        <?php
        //memorizzare in un array $ris
        // gli indici dell'array $a
        // in cui è memorizzato il valore $val
        
        // $a=[];//inizializzo array vuoto
        $val = 8;
        $a = ['mario'=> 1, 'giacomo' => 1, 'maria'=> 1, 'simone' => 5, 'giuseppe' => 8 ];
        $a['tutor'] = "Adriano Amadei";
        $a['coordinatore'] = "Sara Forlivesi";
        $a['materia'] = "HTML";
        $ris = [];
        echo "<br>Chi ha preso $val?";
        foreach($a as $key => $value){
            echo "<br>[$key] => $value";
            if($value == $val){
                $ris[] = $key;
                echo "<br>##$key ha preso $val!";
            }

        }
        //assegno alla chiave prof Rossi se la materia e database
        //il valore Casadei se la materia e HTML
        if($a['materia'] == 'database'){
            $a['prof'] = "Rossi";
        }else if($a['materia'] == 'HTML'){
            $a['prof'] = "Casadei";

        }


        echo "<hr>";
        echo "<br>Quindi, chi ha preso $val";
        echo "<br>nella materia; " . $a['materia'] . "insegnata dal docente:" . $a['prof']; 
        if($ris){
            foreach($ris as $studente){
                echo "<br>$studente ha preso $val";
            }
            
        }else{
            echo "<br>nessuno studente ha preso $val";
            
        }
        echo "<br>";
        echo "<br>tutor: " . $a['tutor'];
        echo "<br>coordinatore: " . $a['coordinatore'];
        echo "";
        ?>   
    </body>
</html>
