<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 3</title>
</head>
<body>
    <?php
    $domanda1 = array('categoria' => 'commerciale', 'risposta_corretta' => 0);
    $domanda2 = array('categoria' => 'assistenza', 'risposta_corretta' => 1);
    $domanda3 = array('categoria' => 'assistenza', 'risposta_corretta' => 0);
    $domande = [$domanda1, $domanda2, $domanda3];
   
    //1. elencare le categorie delle domande (senza ripetizione!)

    // inizializzo un'array enumerativo che racchiude tutte le categorie delle domande
    // e lo inizializzo con òla categgoria della prima $domanda dell'array $domande
    $categorie = [$domanda[1]['categoria']];
 
    
    foreach ($domande as $domanda) {
    
    }





  /*   
    /**
     * restituisce la categoria più tutilizzata
     *
     * @param array $domande
     * @return string
     */
   /*  function most_user($domande){
        //copio le categorie in un array
        $elenco_categorie = [];
        foreach ($domande as $domanda){
            if (key_exists($domanda['categoria'], $elenco_categorie)) {
                
            }            
        }

    } */ 
    ?>
    
</body>
</html>