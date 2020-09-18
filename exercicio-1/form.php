<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $result = $numero1 + $numero2;

    if($result > 20) {
        $result += 8;
        echo $result;
    }
    else if($result <= 20) {
        $result -= 5;
        echo $result;
    }
?>