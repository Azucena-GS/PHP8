<?php
// tienen indices numericos y llaves de texto al mismo tiempo
$arregloMixto = [
    "curso" => "php 8",
    0 => "Facultad autodidacta",
    "tipo" => "backend",
    1 => "progra web"
];
echo $arregloMixto["curso"];
echo "<br>";
echo $arregloMixto[1];
?>