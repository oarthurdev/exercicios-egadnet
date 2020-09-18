<?php
    $num = $_POST['numero'];

    if ($num % 10) {
      echo $num . ' é divisível por 10.';
    } 
    else if ($num % 5) {
      echo $num . ' é divisível por 5.';
    }
    else if ($num % 2) {
      echo $num . ' é divisível por 2.';
    }
    else {
      echo $num . ' não é divisível por 10, 5 e 2.';
    }
?>