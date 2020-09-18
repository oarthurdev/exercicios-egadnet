<?php
    $numero = $_POST['numero'];
    $resultado = "";
    if($numero == 1){
        echo $resultado = "Janeiro";
    }
    else if($numero == 2){
        echo $resultado = "Fevereiro";
    }
    else if($numero == 3){
        echo $resultado = "Março";
    }
    else if($numero == 4){
        echo $resultado = "Abril";
    }
    else if($numero == 5){
        echo $resultado = "Maio";
    }
    else if($numero == 6){
        echo $resultado = "Junho";
    }
    else if($numero == 7){
        echo $resultado = "Julho";
    }
    else if($numero == 8){
        echo $resultado = "Agosto";
    }
    else if($numero == 9){
        echo $resultado = "Setembro";
    }
    else if($numero == 10){
        echo $resultado = "Outubro";
    }
    else if($numero == 11){
        echo $resultado = "Novembro";
    }
    else if($numero == 12){
        echo $resultado = "Dezembro";
    }
    else {
        echo $resultado = "Não existe mês com esse número.";
    }
?>