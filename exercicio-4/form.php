<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    $list = [$numero1, $numero2, $numero3];
    print_r(rsort($list));
?>