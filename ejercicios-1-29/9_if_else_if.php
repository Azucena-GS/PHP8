<?php
    //determinar el dia de la semana segun un numero
    $diaNumero = 3;

    if ($diaNumero == 1) {
        echo "Es lunes";
    } elseif ($diaNumero == 2) {
        echo "Es martes";
    } elseif ($diaNumero == 3) {
        echo "Es miercoles";
    } elseif ($diaNumero == 4) {
        echo "Es jueves";
    } elseif ($diaNumero == 5) {
        echo "Es viernes";
    } elseif ($diaNumero == 6) {
        echo "Es sabado";
    } elseif ($diaNumero == 7) {
        echo "Es domingo";
    } else {
        echo "dia invalido!!";
    }
?>