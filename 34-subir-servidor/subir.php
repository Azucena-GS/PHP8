<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_FILES["archivo"]["name"];
    $temporal = $_FILES["archivo"]["tmp_name"];

    $destino = "subidas/" . $nombre;

    if (move_uploaded_file($temporal, $destino)) {
        echo "Archivo subido con exito!!";
    } else {
        echo "No se pudo subir el archivo";
    }
}

?>