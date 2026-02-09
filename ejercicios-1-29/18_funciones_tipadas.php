<?php
declare(strict_types = 0);
//funciones con tipado de datos

function dividir(float $valor1, float $valor2) : float {
    return $valor1 / $valor2;
}

echo dividir(10, "2");

?>