<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($nombre = $_POST['nombre'])){
        echo "El nombre es $nombre";
    } else {
        echo "No mandaste nombre!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Procesar formulario en el mismo script</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Escribe tu nombre</label>
        <input type="text" name="nombre">
        <button type="submit">Procesar</button>
    </form>
</body>
</html>