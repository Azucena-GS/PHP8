<?php
// 1. Arreglo bidimensional indexado
$estudiantes = [
    ["juan", 25, "ing"],
    ["Maria", 25, "medico"]
];
echo $estudiantes[0][0]; // Salida: juan
echo "<br>";
echo $estudiantes[1][2]; // Salida: medico

// 2. Arreglo multidimensional asociativo (Estructura tipo API/JSON)
$productos = [
    "laptop" => [
        "marca" => "hp",
        "precio" => 8000,
        "stock" => 5
    ],
    "mouse" => [
        "marca" => "logitech",
        "precio" => 500,
        "stock" => 20
    ]
];
echo "<hr>";
// Acceder a un nivel profundo
echo $productos["laptop"]["precio"]; // Salida: 8000
?>