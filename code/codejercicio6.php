<?php 

if ($_POST) {

    $num1 = $_POST['num1'];
    $i = 1;

    while ($i <= 10) {
        
        echo "$num1 x $i = ". $num1*$i++ ."<br>";

    }

}   

?>