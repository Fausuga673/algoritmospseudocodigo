<?php

if (isset($_POST['cantidad'])) {
    
    $preciozapato = 80;
    $cantidad = $_POST['cantidad'];
    $descuento1 = 0.10;
    $descuento2 = 0.20;
    $descuento3 = 0.40;
    
    if  (($cantidad >= 10) and ($cantidad < 20)) {
        
        echo "$",($preciozapato*$cantidad)-(($preciozapato*$cantidad)*$descuento1);

    } elseif (($cantidad >= 20) and ($cantidad < 30))  {

        echo "$",($preciozapato*$cantidad)-(($preciozapato*$cantidad)*$descuento2);
        
    } elseif ($cantidad >= 30) {

        echo "$",($preciozapato*$cantidad)-(($preciozapato*$cantidad)*$descuento3); 

    } else {

        echo "$", $cantidad*$preciozapato;

    }

}
?>