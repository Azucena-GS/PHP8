<?php
$numeros = [1, 2, 3, 4, 5];
//contar elementos de un arreglo
echo "<h4>Contar elementos de un arreglo</h4>";
echo count($numeros);
echo "<hr>";

//agregar al final de un arreglo
array_push($numeros, 6);

//agregar al inicio del arreglo
array_unshift($numeros, 100);

//eliminar al final de un arreglo
$elimino = array_pop($numeros);

//eliminar al inicio
$elInicio = array_shift($numeros);

//Verificar si existe un valor
$personas = [
    "nombre" => "azu",
    "curso" => "php 8"
];
if(in_array("azu", $personas)){
    echo "el nombre esta en el arreglo";
} else {
    echo "No lo encontre";
}
echo "<hr>";
//funciones de ordenamiento
//orden ascendente
sort($numeros);
print_r($numeros);
echo "<hr>";

//orden descendente
rsort($numeros);
print_r($numeros);

echo "<hr>";

//combinar arreglos
$a = [1, 2, 3];
$b = [4, 5, 6];
$c = array_merge($a, $b);
print_r($c);

echo "<hr>";

//buscar en un arreglo
$posicion = array_search(6, $b);
echo $b[$posicion];

?>