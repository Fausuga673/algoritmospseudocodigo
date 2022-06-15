<?php 

if ($_POST) {

    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $año = $_POST['año'];

    if (($año >= 1900) and ($año <= 2022))  {

        switch ($mes) {
            
            case $dia <= -1 or $dia >= 31:
                echo "<strong>ERROR</strong>, día ingresado es incorrecto";
                break;

            case $mes <= -1 or $mes >= 13:
                echo "<strong>ERROR</strong>, mes ingresado es incorrecto";
                break;

            case $mes == 1:
                echo "$dia de Enero de $año";
                break;
    
            case $mes == 2:
                echo "$dia de Febrero de $año";
                break;
    
            case $mes == 3:
                echo "$dia de Marzo de $año";
                break;
    
            case $mes == 4:
                echo "$dia de Abril de $año";
                break;
    
            case $mes == 5:
                echo "$dia de Mayo de $año";
                break;
    
            case $mes == 6:
                echo "$dia de Junio de $año";
                break;
    
            case $mes == 7:
                echo "$dia de Julio de $año";
                break;
    
            case $mes == 8:
                echo "$dia de Agosto de $año";
                break;
    
            case $mes == 9:
                echo "$dia de Septiembre de $año";
                break;
    
            case $mes == 10:
                echo "$dia de Octubre de $año";
                break;
    
            case $mes == 11:
                echo "$dia de Noviembre de $año";
                break;
    
            case $mes == 12:
                echo "$dia de Diciembre de $año";
                break;
            
        }

    } else {

        echo "<strong>ERROR</strong>, solo se permiten fechas desde 1900 hasta 2022";

    }

}

?>