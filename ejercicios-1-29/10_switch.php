<?php
//switch es una estructura de control multicasos
$diaNumero = 3;

switch($diaNumero) {
    case 1:
        //codigo o la respuesta
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6: 
        echo "Sabado"; 
        break;
    case 7: 
        echo "Domingo";
        break;
    default:
        echo "Numero o dia invalido";
        break;
}
?>