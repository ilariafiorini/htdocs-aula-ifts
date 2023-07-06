<?php
include_once("./include/con_db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Prodotto</title>
</head>
<body>
   <?php
    //var_dump($_REQUEST);
    $id = $_REQUEST['id'];
    
    $binds[0]=['segnaposto'=> 'id','var'=>$id];
    fz_sql("UPDATE prodotti SET pro_visualizzazioni = pro_visualizzazioni + 1 WHERE pro_id=:id",$binds);

    //var_dump($id);
    $prodotti = fz_sql("SELECT * FROM prodotti INNER JOIN categorie ON pro_cat_id = cat_id
                            WHERE pro_id = :id",$binds );
    //var_dump($prodotti);
    $prodotto=$prodotti[0];
    echo "Categoria: ". $prodotto['cat_nome']."<br>";
    echo "<b>". $prodotto['pro_nome']."</b><br>";
    echo $prodotto['pro_descrizione']."<br>";
    echo number_format($prodotto['pro_prezzo'], 2, ",", ".") . "&euro; <br>";
   ?>
</body>
</html>