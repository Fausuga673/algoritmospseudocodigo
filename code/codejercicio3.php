<!-- 4. Diseñar un algoritmo que me permita solicitar un número y este indique
cuantos dígitos tiene, el algoritmo indica hasta 4 dígitos y de ahí en adelante
que arroje un mensaje que diga demasiados dígitos. -->

<?php

if (isset($_POST['num1'])) {
    
    $num = $_POST['num1'];

    if (( $num >= 0) and ($num <= 9)) {
        echo "El $num tiene 1 digito";
    }

    if (($num >= 10) and ($num <= 99)) {
        echo "El $num tiene 2 digito";
    }

    if (($num >= 100) and ( $num <= 999)) {
        echo "El $num tiene 3 digito";
    } 

    if (($num >= 1000) and ( $num <= 9999)) {
        echo "El $num tiene 4 digito";
    } 

    if ($num >= 10000) {

        echo "Solo se permiten máximo 4 digitos";

}
}


?>