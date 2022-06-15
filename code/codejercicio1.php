<?php 
if (isset($_POST['num1'], $_POST['num2'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $accion = $_POST['accion'];
    $suma = $num1 + $num2;

    switch ($accion) {

        case $accion == 'suma':
            echo $resultado = $num1 + $num2;
            break;

        case $accion == 'resta':
            echo $resultado = $num1 - $num2;
            break;

        case $accion == 'multiplicacion':
            echo $resultado = $num1 * $num2;
            break;

        case $accion == 'division':
            echo $resultado = $num1 / $num2;
            break;

        default: 
            echo "Valores no válidos";
            
}

}

?>