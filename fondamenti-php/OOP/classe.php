<?php
class Persona {
// proprietà
public $nome = "";
public $cognome = "";
public $ruolo = "";
public $ente="EnAip";
private $password;

private $voti= [];
public $dataNascita;
//public $dataNascita = date('Y-m-d');

//costruttore (metodo magico)
public function __construct($nomeDaAssegnare , $cognomeDaassegnare){
//inizializzo la proprietà name
$this -> nome = $nomeDaAssegnare;
$this -> cognome = $cognomeDaassegnare;

//
echo '<br> istanziato un nuovo oggetto con nome '.$this ->nome.' e cognome '.$this ->cognome.'<br>';
}

//metodo eta che restituisce l'età dello studente
 function setDataNascita($dataNascita){
    $this->dataNascita = $dataNascita;
 }

 function eta(){
    //se mese-giorno corrente > mese-giornodataNascita --> ok
        $annoDataNascita = "1990" //$this ->substr($this->dataNascita;, 0, 4);
    $eta = date("Y") - $annoDataNascita;
    return $eta;
 }

//metodo setVoti che inizializza l'array dei voti
//metodo setPassword di validazione della passwd di Classroom: lung min 10, 


//metodo
public function getName() {
    $nomeCognome = "";
//$this rappresenta l'oggetto che sarà costruito a runtime
$nomeCognome = $this->nome.' '.$this->cognome; 
return $nomeCognome;
}
}
?>


<?php
//istanzio 2 nuovi oggetti della classe Persona

$studente = new Persona("Mario", "Rossi");
$studente -> nome ="Marco";
echo "Ah, no, era ".$studente-> nome.'<br>';
$docente = new Persona("Giacomo", "Verdi");
$studente -> setDataNascita('1990-10-21');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1° Classe</title>
    </head>
    <body>
        Studente:
        <?php echo $studente->getName()?> Ente: <?php echo $studente->ente?><br>
        
        Docente:
        
        <?php echo $docente->getName()?> Ente: <?php echo $docente->ente?><br>
        <?php
        
        ?>
    </body>
</html>