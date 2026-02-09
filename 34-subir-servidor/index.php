<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
</head>
<body>
    <h1>Subir un archivo al servidor con php</h1>
    <form action="subir.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <br><br>
        <button>Subir archivo</button>
    </form>
</body>
</html>