<?php
// Si necesitas al menos una iteración segura
// y después una evaluación usa do-while

// validación simple

do {
    $respuesta = "no";
    echo "¿Continuar? (si/no): $respuesta";
} while ($respuesta === "si");
echo "<hr>";

// iteración garantizada
$contador = 1;

do {
    echo "Ejecución #$contador";
    $contador = $contador + 1; // También puedes usar $contador++;
} while ($contador <= 3);

?>