<?php
class Persona {
// proprietà
public $nome = "";
public $cognome = "";
public $ruolo = "";
public $ente="EnAip";
//public $dataNascita = date('Y-m-d');

//costruttore (metodo magico)
public function __construct($nomeDaAssegnare , $cognomeDaassegnare){
//inizializzo la proprietà name
$this -> nome = $nomeDaAssegnare;
$this -> cognome = $cognomeDaassegnare;

//
echo '<br> istanziato un nuovo oggetto con nome '.$this ->nome.' e cognome '.$this ->cognome.'<br>';
}
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
class Esempio
{
    function stampaQualcosa($stringa){
        echo $stringa;
    }
    function stampaQualcosaInGrassetto($stringa){
        echo '<b> ';
        echo $this -> stampaQualcosa($stringa) ;
        echo '</b><br>';
    }
    function stampaQualcosaFormattata($stringa , $tag ){
        echo "<$tag> ";
        echo $this -> stampaQualcosa($stringa) ;
        echo "</$tag><br>";
    }
}

$e = new Esempio();

$studente = new Persona("Mario", "Rossi");
$studente -> nome ="Marco";
echo "Ah, no, era ".$studente-> nome.'<br>';
$docente = new Persona("Giacomo", "Verdi");
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
        echo $e -> stampaQualcosaInGrassetto("qualcosa in grassetto").'<br>';
        echo $e -> stampaQualcosa("qualcosa").'<br>';
        echo $e -> stampaQualcosaFormattata("qualcosa in grassetto", "b").'<br>';
        echo $e -> stampaQualcosaFormattata("qualcosa in corsivo", "i").'<br>';
        ?>
    </body>
</html>