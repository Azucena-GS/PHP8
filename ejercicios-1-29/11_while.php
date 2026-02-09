<?php

//while
//es una estructura de control de repeticion
//que se ejecutara mientras su condicion sea verdadera

//como hacer un bucle infinito
// while (true) {
//     echo "hola";
// }

//contar numeros
$numero = 1;
while ($numero <= 3) {
    echo "el numero es $numero";
    echo "<p>"; // Nota: en una imagen usas <br> y en otra <p>
    $numero = $numero + 1;
}

echo "<hr>";

//repetir un mensaje con while
$veces = 1;
while($veces <= 4) {
    echo "$veces . - Hola que tal";
    echo "<br>";
    $veces ++; // Esta es la forma corta de incrementar en 1
}

?>