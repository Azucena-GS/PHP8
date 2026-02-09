<?php
/*
    ¿Que es una estructura de control?
    - es una estructura que nos ayuda con el flujo de ejecucion
    - de nuestro codigo
*/
// if - es una estructura condicional
// donde si la condicion es verdadera se ejecuta
/*
    su estructura o declaracion es

    if (condicion) {

    }
*/
if (true) {
    echo "Esta estructura se ejecuto bien!";
}
echo "<hr>";

// verificar si un numero es mayor que 10
$numero = 15;

if ($numero > 10) {
    // interpolacion
    echo "El numero $numero es mayor que 10";
}
echo "<hr>";

// verificar si una variable esta definida y no esta vacia
$texto = "Hola que tal";

if (isset($texto) && !empty($texto)) {
    echo "Texto valido: $texto";
}
echo "<hr>";

// verificar si una persona tiene acceso
$estaRegistrado = true;
if ($estaRegistrado) {
    echo "Acceso concedido al sistema :D";
}
echo "<hr>";
?>