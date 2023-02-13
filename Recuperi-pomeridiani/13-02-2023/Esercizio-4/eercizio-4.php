<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Esercizio-4</title>
    </head>
    <body>
        
        Nell’array bidimensionale $partecipanti ogni elemento rappresenta un array di partecipanti ai
        vari corsi svolti dall' ente di formazione Enaip. I singoli array $p1, $p2, ecc contengono i
        cognomi e nomi dei partecipanti ad un corso specifico.
        L’array $corsi contiene i nomi dei corsi, nello stesso ordine del primo, cioè il corso Autocad è
        stato seguito dai partecipanti elencati in $p1, Informatica è stato seguito dai partecipanti di $p2,
        ecc.
        Si chiede di svolgere le seguenti attività:
        1. aggiungere il nuovo partecipante “Novella Novellini” al corso di Informatica
        2. elencare i nomi di tutti i partecipanti (di tutti i corsi)
        3. calcolare il numero medio dei partecipanti ai corsi
        4. indicare il nome del corso con il maggior numero di partecipanti
        5. tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
        giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
        primo in ordine alfabetico a sostenere l'esame (tra tutti i partecipanti di tutti i corsi).
        6. si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, con
        chiave 'corso' e valore il nome del corso, fornito nel secondo array.
        
        <?php
    
        function stampa_array_associativo($i){
            foreach ($i as $key => $value) {
                echo $key.': '.$value .'<br>';
            }
            echo '<br>';
        }       
        //definisco il primo array
            $p1 = ['Primini Primo', 'Secondini Secondo'];
            $p2 = ['Giannini Gianni', 'Stefanini Stefano', 'Mariolini Maria','Giacomini Giacomo'];
            $p3 = ['Violetti Viola','Gaietti Gaia'];
            $partecipanti= [$p1, $p2, $p3];
            $corsi = ['Autocad','Informatica','Inglese'];
            
           //definisco il secondo array
            $s1=['cognome'=>'Primini', 'nome'=>'Primo','corso' =>'Autocad'];
            $s2=['cognome'=>'Secondini','nome'=>'Secondo','corso'=> 'Autocad'];
            $s3=['cognome'=>'Giannini', 'nome'=>'Gianni','corso'=> 'Informatica'];
            $studenti = [$s1, $s2, $s3];
            
            echo '<br>';
            var_dump($partecipanti);
            
            echo $studenti[0]['nome']. ' ' .$studenti[0]['cognome'] . '<br>' ;
            echo $studenti[1]['nome']. ' ' .$studenti[1]['cognome'] . '<br>' ;
            //echo $studenti[1]['nome']. '<br>' ;
            
            echo '<hr>';
            echo "Soluzione punto 1 <br>";
            echo '<hr>';
            
            // cerco l'indice dell'array relativo al corso di informatica
            
            // con foreacjh
            // foreach ($corsi as $key => $value) {
            //     if ($value == 'Informatica'){
                //         $indice = $key;
                //     }
                
                // }
                
                //con for
                for ($i=0; $i < count($corsi) ; $i++) { 
                    if ($corsi[$i] == 'Informatica') {
                        $indice = $i;
                    }          
                }
                
                //aggiungere il nuovo partecipante 'Novella Novellini' al corso di informatica
                
                $partecipanti[$indice][] = 'Novellini Novella';
                //$partecipanti[1][] = 'Novella Novellini';
                var_dump($partecipanti);
                $studenti[]=['cognome'=> 'Novellini', 'nome'=> 'Novella', 'corso' => 'Informatica'];
                $studenti[]=['cognome'=> 'Marielli', 'nome'=> 'Maria', 'corso' => 'Informatica'];
                var_dump($studenti);
                
                echo '<hr>';
                echo "Soluzione punto 2 <br>";
                echo '<hr>';
                
                //elenco d tutti i partecipanti di tutti i corsi
                foreach ($partecipanti as $array) {
                    foreach ($array as $studente) {
                        echo "$studente <br>";
                    }
                    var_dump($array);
                }

                foreach ($studenti as $array) {
                    echo $array['cognome'] . ' '.$array['nome'].'<br>';
                }
                var_dump($studenti);

                foreach ($studenti as $array) {
                    stampa_array_associativo($array);
                }
                echo '<hr>';
                echo "Soluzione punto 3 <br>";
                echo '<hr>';
                
                //calcolo il numero medio dei partecipanti ai corsi
                $numero_corsi = count($corsi);
                echo 'Ci sono '.$numero_corsi.' corsi <br>';
                //calcolo il numerio di partecipanti
                $numero_partecipanti = 0;
                foreach ($partecipanti as $array) {
                    $numero_partecipanti +=count($array);
                }
                echo 'Ci sono '.$numero_partecipanti.' partecipanti <br>';
                echo 'In media ogni corso ha '. ($numero_partecipanti/$numero_corsi) . ' partecipanti<br>';
                
                $numero_corsi = 0;
                $elenco_corsi = [];
                foreach ($studenti as $studente) {
                    $elenco_corsi[]=$studente['corso'];
                }
                //rimuovo i corsiduplicati
                $elenco_corsi = array_unique($elenco_corsi);
                //conto i corsi unici
                $numero_corsi = count($elenco_corsi);
                
                //si potrebbe usare la funzione in_array() per popolare l'array dei corsi con solo i corsi non già presemti 
                
                echo '<br>Ci sono'.$numero_corsi.' corsi <br>';
                $numero_partecipanti = count($studenti);
                echo 'Ci sono'.$numero_partecipanti.' studenti <br>';
                echo 'In media ogni corso ha '. ($numero_partecipanti/$numero_corsi) . ' partecipanti<br>';
                
                echo '<hr>';
                echo "Soluzione punto 4 <br>";
                echo '<hr>';
                
                //indicare il nome del corso con il maggior numero di partecipanti
                
                $massimo = 0;
                
                for ($i=0; $i < count($corsi) ; $i++) {
                    if(count($partecipanti[$i])>$massimo){
                        $massimo += count($partecipanti[$i]);
                    }
                    
                    $corso_massimo= $i-1;//controllare perchè mi funziona solo con questo -1
                }
                
                
                echo '<br>Il corso col numero maggiore di corsisti è '.$corsi[$corso_massimo].'<br>';
                
                $elenco_corsi = [];
                $numero_studenti = [];
                foreach ($studenti as $studente) {
                    //verifico se il corso è già preente nell'array
                    //if (in_array($studente['corso'], $elenco_corsi)) {
                    if(key_exists($studente['corso'], $numero_studenti)){
                        //il corso esiste gia, aumento i partecipanti
                        //$elenco_corsi['corso'] +=1;
                        // il corso esiste gia, aumento i pèartecipanti
                        $numero_studenti[$studente['corso']]++;
                    }else{
                        //$elenco_corsi[] = $studente['corso'];
                        // il corso non esiste, lo aggiungo all'array e inizializzo i partecipanti ad 1
                        $numero_studenti[$studente['corso']] = 1;
                    }
                    
                }
                //var_dump($elenco_corsi);
                var_dump($numero_studenti);
                $massimo = 0;
                foreach ($numero_studenti as $key => $value) {
                    //echo 'key '.$key.'<br>';
                    if($value> $massimo){
                        $massimo = $value;
                        $corso_massimo = $key;
                        
                    }
                }
                
                echo 'Il corso con più iscritti è'.$corso_massimo.'<br>';
                
                echo '<hr>';
                echo "Soluzione punto 5 <br>";
                echo '<hr>';
                ?>
        </body>
        </html>