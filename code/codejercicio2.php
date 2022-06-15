<?php

if (isset($_POST['cantidad'])) {
    
    $preciozapato = 13;
    $cantidad = $_POST['cantidad'];
    $descuento1 = 0.20;
    $descuento2 = 0.10;
    
    if ($cantidad >= 3) {
        
        echo "$",($preciozapato*$cantidad)-(($preciozapato*$cantidad)*$descuento1);

    } else {
        echo "$",($preciozapato*$cantidad)-(($preciozapato*$cantidad)*$descuento2);
    }

}
?>