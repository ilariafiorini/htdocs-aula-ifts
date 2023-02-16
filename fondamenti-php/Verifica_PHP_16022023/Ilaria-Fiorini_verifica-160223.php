<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica PHP 16 febbraio 2023</title>
</head>
<body>
    <?php

        $camera1=['nome'=>"101", 'n_persone'=>60, 'incasso'=>8000];
        $camera2=['nome'=>"102", 'n_persone'=>30, 'incasso'=>2000];
        $camera3=['nome'=>"103", 'n_persone'=>50, 'incasso'=>6000];
        $camere=[$camera1, $camera2, $camera3];

        
        foreach ($camere as $camera) {
            echo 'Nome della camera:'.$camera['nome'].'<br>';
            if(!isset($incasso_totale)){
                $incasso_totale=$camera['incasso'];
            }else{
                $incasso_totale+=$camera['incasso'];
            }
            if(!isset($camera_top)){
                $camera_top=$camera['nome'];
                $incasso_top=$camera['incasso'];
                
            }else{
                if ($incasso_top <= $camera['incasso']){
                    $camera_top=$camera['nome'];
                    $incasso_top=$camera['incasso'];
                    
                }
            }
            $camera['mese']=date('n');
            
        }
        echo "<br>L' incasso totale è: ".number_format($incasso_totale,2, ",",".").' €'; 
        echo '<br>la camera top è la camera: '.$camera_top.'e ha incassato: '.number_format($incasso_top,2, ",",".").' €';

        function tot_persone_mese($camere_albergo){
            foreach ($camere_albergo as $camera) {
                if(!isset($totale_persone)){
                    $totale_persone = $camera['n_persone'];
                }else
                $totale_persone+=$camera['n_persone'];
                
            }
            return $totale_persone;
        }

        $bilancio_annuale=[];
        $incasso_corrente=$incasso_totale;
        for ($i=12+date('n'); $i>date('n')  ; $i--) {

            if ($i > 12){
                $mese_corrente = $i -12;
            } else{
                $mese_corrente = $i;

            }
            $bilancio_annuale[$mese_corrente]=$incasso_corrente;
            $incasso_corrente -=200;
            
        }
        echo '<br>In totale ci sono: '.tot_persone_mese($camere).' persone'; 
        echo '<br>In media ci sono: '.round(tot_persone_mese($camere)/count($camere), 2).' persone per camera'; 
        var_dump($bilancio_annuale);

        function tot_persone_incasso_mese($camere_albergo){
            foreach ($camere_albergo as $camera) {
                if(!isset($totale_persone)){
                    $totale_persone = $camera['n_persone'];
                }else{
                $totale_persone+=$camera['n_persone'];
                }
                if(!isset($incasso_totale)){
                    $incasso_totale=$camera['incasso'];
                }else{
                    $incasso_totale+=$camera['incasso'];
                }
            }
            $totale_persone_incasso=['totale_persone'=>$totale_persone,'totale_incasso'=>$incasso_totale];
            return $totale_persone_incasso;
        }
        var_dump (tot_persone_incasso_mese($camere));

        echo '<br><table style='.'"border: 1px solid black"'.'>';
        echo '<tr style='.'"border: 1px solid black"'.'>';
        echo '<td style='.'"border: 1px solid black"'.'>'.'Camera'.'</td>';
        echo '<td style='.'"border: 1px solid black"'.'>'.'N. Persone'.'</td>';
        echo '<td style='.'"border: 1px solid black"'.'>'.'Incasso'.'</td>';
        echo '</tr>';
        foreach ($camere as $camera) {
            echo '<tr style='.'"border: 1px solid black"'.'>';
            foreach ($camera as $val_camera){
                echo '<td style='.'"border: 1px solid black"'.'>'.$val_camera.'</td>';
            }

            echo '</tr>';
        }
        echo '</table>';
    ?>
    
</body>
</html>