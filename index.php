<?php 
    $imagenes = ['galeria1', 'galeria2', 'galeria3', 'galeria4', 'galeria5', 'galeria6', 'galeria7', 'galeria8', 'galeria9', 'galeria10', 'galeria11', 'galeria12' ];
    
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Librería | Libros Fantásticos</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header>
        <img src="img/logo.svg" alt="La Librería | Libros Fantásticos">
        <nav>
            <ul>
                <li><a href="catalogo.html">Catálogo</a></li>
                <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>

    <main role="main">
        <section>
            <h1>Bienvenidos a La Librería</h1>
            <img src="img/bienvenida_sm.jpg" alt="La Librería, tienda online de libros fantásticos">
        </section>
        <section>
            <h1>Novedades</h1>
            <article>
                <img src="img/01.jpg" alt="H.P. Lovecraft, Obras Completas">
                <h2>H.P. Lovecraft</h2>
                <h3>H.P. Lovecraft, Obras Completas</h3>
                <a href="#">Ver más</a>
            </article>
            <article>
                <img src="img/02.jpg" alt="Las Crónicas Completas de Conan">
                <h2>Robert E. Howard</h2>
                <h3>Las Crónicas Completas de Conan</h3>
                <a href="#">Ver más</a>
            </article>
            <article>
                <img src="img/03.jpg" alt="Los Hijos de Húrin">
                <h2>J.R.R. Tolkien</h2>
                <h3>Los Hijos de Húrin</h3>
                <a href="#">Ver más</a>
            </article>
            <article>
                <img src="img/04.jpg" alt="El Silmarillion">
                <h2>J.R.R. Tolkien</h2>
                <h3>El Silmarillion</h3>
                <a href="#">Ver más</a>
            </article>
            <article>
                <img src="img/05.jpg" alt="Duna">
                <h2>Frank Herbert</h2>
                <h3>Duna</h3>
                <a href="#">Ver más</a>
            </article>
            <article>
                <img src="img/06.jpg" alt="Esfera">
                <h2>Michael Chrichton</h2>
                <h3>Esfera</h3>
                <a href="#">Ver más</a>
            </article>
            <article>
                <img src="img/07.jpg" alt="Los cuentos y poemas de Edgar Allan Poe">
                <h2>Edgar Allan Poe</h2>
                <h3>Los cuentos y poemas de Edgar Allan Poe</h3>
                <a href="#">Ver más</a>
            </article>
            <article>
                <img src="img/08.jpg" alt="Obras Completas de William Shakespeare">
                <h2>William Shakespeare</h2>
                <h3>Obras Completas de William Shakespeare</h3>
                <a href="#">Ver más</a>
            </article>
        </section>
    </main>
    <!-- GALERIA-->
  <section class="container-fluid container-galeria py-4 mt-3 d-none d-md-block" id="scrollspyHeading4">

    <h2 class="text-center justify-content-center py-4">Galería</h2>

    <div class="row">
        <?php for ($i=0; $i<count($imagenes); $i++) { ?>
            <div class="col-12 col-lg-2 col-md-3 col-sm-4 px-0">
                    <img src="img/Galeria/<?php echo $imagenes[$i]; ?>.jpg" alt="">
        <?php };?>
    </div>
    </div>
</section>

<!-- FIN GALERIA-->

    <?php
	if(isset($_POST['error'])){
		echo '<p style="color:red;">Por favor, complete todos los campos obligatorios y asegúrese de que la edad sea un número entre 18 y 100.</p>';
	} ?>
    
	
	<form action="datos.php" method="POST">
		<label for = "Nombre"> Nombre: *</label><br>
		<input id = "Nombre" type="text" name="nombre" required><br><br>
		<label>Email: *</label><br>
		<input type="email" name="email" required><br><br>
		<label>Edad:</label><br>
		<input type="number" name="edad" min="18" max="100"><br><br>
        <label>
            <input type="checkbox" name="opcion1" value="opcion1" required>
            * Aceptar Términos y Condiciones.
        </label>
        <br>
        <label>
            <input type="checkbox" name="opcion2" value="opcion2">
            Recibir actualizaciones por correo electrónico.
        </label>
        <br>
        <label>
            <input type="checkbox" name="opcion3" value="opcion3">
            Acepto recibir ofertas especiales y promociones.
        </label>
        <br>
        <label>
            <input type="checkbox" name="opcion4" value="opcion4">
            Check si sos campeón del mundo.
        </label>
        <br>
		<label>Mensaje:</label><br>
		<textarea name="mensaje" rows="5"></textarea><br><br>
		<input type="submit" value="Enviar">
	</form>
	<p>* Campos obligatorios</p>
    
    <footer>
        <ul>
            <li>Av. Rivadavia 1755 - CABA</li>
            <li>011-4444-6666</li>
            <li>contacto@lalibreria.com.ar</li>
        </ul>
    </footer>
</body>

</html>