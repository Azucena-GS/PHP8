<?php
//es una estructura de datos que permite almacenar multiples valores

//arreglos indexados
//declaracion con array
$frutas = array("manzana", "pera", "uva");

// Acceder a un elemento específico (índice 1 es "pera")
echo $frutas[1]; 
echo "<hr>";
echo "<pre>";
var_dump($frutas);
echo "</pre>";
echo "<hr>";

//sintaxis corta de array
$colores = ["rojo", "negro", "blanco"];
echo "<pre>";
var_dump($colores);
echo "</pre>";
echo "<hr>";

//agregar un elemento al final del arreglo
$colores[] = "gris"; // PHP asigna el siguiente índice disponible (3)
$colores[1] = "Azul"; // Sobrescribe "negro" con "Azul"
$colores[10] = "purpura"; // Salta hasta el índice 10
var_dump($colores);
?>