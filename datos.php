<?php 

$nombre     = '';
$apellido   = '';
$edad       = '';
$email       = '';

// Metodo isset()
// Nos permite validar que el campo que esperamos, llegue.
if (isset($_POST["nombre"]) && $_POST["nombre"]!='') { // si isset devuelve true, significa que el campo vino
    $nombre   = $_POST["nombre"];
} else {
    // Redireccionamos a una pagina de error, o al formulario con un mensaje que informe que no vino el campo
    header("location:index.php?error=Falta el nombre");
}

if (isset($_POST["apellido"])) { // si isset devuelve true, significa que el campo vino
    $apellido   = $_POST["apellido"];
}
if (isset($_POST["edad"])) { // si isset devuelve true, significa que el campo vino
    $edad   = $_POST["edad"];
}
if (isset($_POST["email"])) { // si isset devuelve true, significa que el campo vino
    $email   = $_POST["email"];
}

echo "¡Muchas gracias!"
//echo $nombre." ".$apellido." tiene ".$edad." años";
?>