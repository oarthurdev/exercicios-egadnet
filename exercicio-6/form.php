<?php
    $nomelivro = $_POST['nomelivro'];
    $tipousuario = $_POST['tipousuario'];
    $recibo = $_POST['recibo'];

    $diasparadevolver = 0;

    if($tipousuario == "professor"){
        echo $diasparadevolver = 10;
    }
    else {
        echo $diasparadevolver = 3;
    }
?>