<?php
// es una estructura de control de errores
// permite ejecutar codigo que puede fallar
// captura y maneja errores sin romper el programa
// finally es opcional pero recomendado
try {
    $a = 10;
    $b = 0;

    if($b === 0){
        throw new Exception("No se puede dividir entre cero");
    }
    echo $a / $b;
} catch (Exception $th) {
    echo $th->getMessage();
} finally {
    echo "Operacion finalizada!!";
}
echo "<hr>";

// validacion de email, este puede venir por formulario html
try {
    $email = "correo@hola.com";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new Exception("El correo no es valido");
    }
    echo "correo valido $email";
} catch (Exception $th) {
    echo "Error " . $th->getMessage();
}
?>