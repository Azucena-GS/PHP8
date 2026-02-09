<?php

$persona = [
    "nombre" => "roldan",
    "edad" => 35,
    "ciudad" => "Mexico",
    "profesion" => "ing"
];

foreach ($persona as $key => $value) {
    if (is_int($value)) {
        echo "el entero es $value";
    }
}

?>