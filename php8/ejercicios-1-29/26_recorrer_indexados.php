<?php

$coches = ["deportivo", "seddan", "camioneta"];

// Recorrer con ciclo for
for ($i=0; $i < count($coches); $i++) { 
    echo "el en indice $i esta " . $coches[$i];
    echo "<br>";
}
echo "<hr>";

// Recorrer indexados con foreach
$numeros = [1,4,7,8,9,6,3];

foreach($numeros as $numero){
    echo $numero;
    echo "<br>";
}
echo "<hr>";

// Recorrer obteniendo el índice y el valor
foreach ($numeros as $indice => $valor) {
    echo "el indice es $indice y el valor es $valor";
    echo "<br>";
}

?>