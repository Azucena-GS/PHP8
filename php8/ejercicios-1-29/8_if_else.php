<?php
// if else:
// si no es verdadero entonces hacemos esto

// verificar si un numero es positivo o negativo
$numero = 5;

if ($numero >= 0) {
    echo "Tenemos un positivo o cero y es $numero";
} else {
    echo "El numero $numero es negativo!!";
}
echo "<hr>";
// verificar si un usuario esta logeado
$usuarioLogeado = true;

if ($usuarioLogeado) {
    echo "Bienvenido!!";
} else {
    echo "Por favor inicia sesion";
}

?>