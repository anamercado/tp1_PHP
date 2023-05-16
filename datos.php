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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de envío</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header>
            <div class="contenedor-header">
                <a class="nav" href="index.php"><img src="img/logo.svg" alt="La Librería | Libros Fantásticos"></a>
                <nav>
                    <ul>
                        <li><a class="nav" href="index.php">Home</a></li>
                        <li><a class="nav" href="#Novedades">Novedades</a></li>
                        <li><a class="nav" href="#SobreNosotros">Sobre Nosotros</a></li>
                        <li><a class="nav" href="#Contacto">Contacto</a></li>
                    </ul>
                </nav>
                <form class="buscar" action="" method="GET">
                    <label for="busqueda"></label>
                    <input id="busqueda" name="busqueda" type="text" placeholder="Buscá tu libro">
                    <button id="buscar" name="buscar" aria-label="buscar contenido"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
    </header>
    <Section class="conainer">
        <h1>¡Gracias por contactarnos!</h1>

        <div class="mt-3">
            <?php
                echo "¡Hola " . $nombre . "! Tu consulta fue enviada con éxito.";
            ?>
            <p class="mt-2">Has completado con los siguientes datos:</p>
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $camposCompletados = [];
                    $camposNoCompletados = [];
                
                    foreach ($_POST as $nombreCampo => $valorCampo) {
                        if (!empty($valorCampo)) {
                            $camposCompletados[] = ucfirst($nombreCampo);
                        } else {
                            $camposNoCompletados[] = ucfirst($nombreCampo);
                        }
                    }
            ?> 
                
            <h3>Campos completados:</h3>
            <ul class="list-unstyled">

            <?php
                    foreach ($camposCompletados as $campo) {
                        echo "<li>" . $campo . "</li>";
                    }
                    echo "</ul>";
            ?>
            
            <h3>Campos no completados:</h3>
            <ul class="list-unstyled">
                    
            <?php
                    foreach ($camposNoCompletados as $campo) {
                        echo "<li>" . $campo . "</li>";
                    }
                    echo "</ul>";
                }

                /*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    foreach ($_POST as $nombreCampo => $valorCampo) {
                        // Para verificar si el campo tiene contenido
                        if (!empty($valorCampo)) {
                            echo "<p><strong>" . ucfirst($nombreCampo) . ":</strong> " . $valorCampo . "</p>";
                        }
                    }
                }

                /*En caso de que sea solo campos (sin mostrar los datos)
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        echo "<ul>";
                        foreach ($_POST as $nombreCampo => $valorCampo) {
                            echo "<li>" . ucfirst($nombreCampo) . "</li>";
                        }
                        echo "</ul>";
                    }
                */
            ?>
        </div>

    </Section>

</body>