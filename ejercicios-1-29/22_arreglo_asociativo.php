<?php
// Arreglos asociativos utilizan claves (keys) personalizadas en lugar de usar indices.

// Declaración con array()
$persona = array(
    "nombre" => "juan",
    "edad" => "25",
    "ciudad" => "CDMX"
);

// Declaración con sintaxis corta []
$producto = [
    "nombre" => "Laptop",
    "precio" => 10000,
    "marca" => "Dell"
];

// Acceso a los elementos
echo $persona["nombre"]; // Muestra "juan"

// Agregar elementos nuevos
$persona["profesion"] = "Ing";

echo "<pre>";
var_dump($persona);
echo "</pre>";
?>