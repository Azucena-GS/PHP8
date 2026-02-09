<?php
// es una estructura de control de bucle
// esta tiene un inicio un fin y un incremento

for ($i=0; $i < 10; $i++) { 
    echo $i;
}
echo "<hr>";

// tabla de multiplicar la que quieras
$numero = 2;

for ($i=1; $i <= 10; $i++) { 
    $tabla = $numero . " x " . $i . " = " . ($numero * $i);
    echo $tabla . "<br>";
}

?>
