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
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
</head>

<body>
<header>
        <div class="contenedor-header">
            <img src="img/logo.svg" alt="La Librería | Libros Fantásticos">
            <nav>
                <ul>
                    <li><a class="nav" href="#Home">Home</a></li>
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

    <main role="main">
        <section id="Home">
            <h1>Bienvenidos a La Librería</h1>
            <img src="img/bienvenida_sm.jpg" alt="La Librería, tienda online de libros fantásticos">
        </section>
        <section id="Novedades">
            <h1>Novedades</h1>
            <div class="contenedor-novedades">
                <article>
                    <img src="img/01.jpg" alt="H.P. Lovecraft, Obras Completas">
                    <h2>H.P. Lovecraft</h2>
                    <h3>H.P. Lovecraft, Obras Completas</h3>
                    <a class="novedades" href="#">Ver reseña</a>
                </article>
                <article>
                    <img src="img/02.jpg" alt="Las Crónicas Completas de Conan">
                    <h2>Robert E. Howard</h2>
                    <h3>Las Crónicas Completas de Conan</h3>
                    <a class="novedades" href="#">Ver reseña</a>
                </article>
                <article>
                    <img src="img/03.jpg" alt="Los Hijos de Húrin">
                    <h2>J.R.R. Tolkien</h2>
                    <h3>Los Hijos de Húrin</h3>
                    <a class="novedades" href="#">Ver reseña</a>
                </article>
                <article>
                    <img src="img/04.jpg" alt="El Silmarillion">
                    <h2>J.R.R. Tolkien</h2>
                    <h3>El Silmarillion</h3>
                    <a class="novedades" href="#">Ver reseña</a>
                </article>
                <article>
                    <img src="img/05.jpg" alt="Duna">
                    <h2>Frank Herbert</h2>
                    <h3>Duna</h3>
                    <a class="novedades" href="#">Ver reseña</a>
                </article>
                <article>
                    <img src="img/06.jpg" alt="Esfera">
                    <h2>Michael Chrichton</h2>
                    <h3>Esfera</h3>
                    <a class="novedades" href="#">Ver reseña</a>
                </article>
                <article>
                    <img src="img/07.jpg" alt="Los cuentos y poemas de Edgar Allan Poe">
                    <h2>Edgar Allan Poe</h2>
                    <h3>Los cuentos y poemas de Edgar Allan Poe</h3>
                    <a class="novedades" href="#">Ver reseña</a>
                </article>
                <article>
                    <img src="img/08.jpg" alt="Obras Completas de William Shakespeare">
                    <h2>William Shakespeare</h2>
                    <h3>Obras Completas de William Shakespeare</h3>
                    <a class="novedades" href="#">Ver reseña</a>
                </article>
            </div>
        </section>
        <section id="SobreNosotros">
            <h1>Sobre Nosotros</h1>
            <div class="contenido">
                <video autoplay muted loop>
                    <source src="media/comic-1.mp4" type="video/mp4">
                </video>

                <div class="direccion">
                    <h1>La Librería</h1>
                    <p>
                        Estamos ubicados en el barrio de Congreso <br>
                        Av. Rivadavia 1755 - CABA | 011-4444-6666 <br>
                        Lunes a Viernes de 11 a 20hs <br>
                        contacto@lalibreria.com.ar
                    </p>
                    <ul>
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-facebook-square"></i></li>
                        <li><i class="fa-brands fa-instagram-square"></i></li>
                    </ul>
                </div>
            </div>  

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1641.9021991020604!2d-58.391407909870026!3d-34.609107355353515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac32291c5c5%3A0x622457900e987e8d!2sAv.%20Rivadavia%201725%2C%20C1089%20CABA!5e0!3m2!1ses-419!2sar!4v1646677440353!5m2!1ses-419!2sar" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <section id="Contacto">
            <h1>Contacto</h1>
        </section>
    </main>

    <!-- GALERIA-->
    <section class="container-fluid container-galeria py-4 mt-3 d-none d-md-block" id="scrollspyHeading4">

        <h2 class="text-center justify-content-center py-4">Galería</h2>

        <div class="row">
            <?php for ($i = 0; $i < count($imagenes); $i++) { ?>
            <div class="col-12 col-lg-2 col-md-3 col-sm-4 px-0">
                <img src="img/Galeria/<?php echo $imagenes[$i]; ?>.jpg" class="img-fluid" alt="">
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- FIN GALERIA-->

    <?php
	if(isset($_POST['error'])){
		echo '<p style="color:red;">Por favor, complete todos los campos obligatorios y asegúrese de que la edad sea un número entre 18 y 100.</p>';
	} ?>
    
	<div class="container">
        <form action="datos.php" method="POST">
            <div class="form-group">
                <label for = "Nombre"> Nombre: *</label><br>
                <input id = "Nombre" type="text" name="nombre" required>
            </div>
            <div class="form-group">
                <label>Email: *</label><br>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Edad:</label><br>
                <input type="number" name="edad" min="18" max="100">
            </div>
            <div class="form-group mt-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion1" value="opcion1" required>
                    <label class="form-check-label">Aceptar Términos y Condiciones *</label>
                </div>
            </div>
            <div class="form-group mt-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion2" value="opcion2">
      		        <label class="form-check-label">Recibir actualizaciones por correo electrónico</label>
    	        </div>
            </div>
            <div class="form-group mt-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion3" value="opcion3">
                    <label class="form-check-label">Aceptar recibir ofertas especiales y promociones</label>
                </div>
            </div>
            <div class="form-group mt-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion4" value="opcion4">
                    <label class="form-check-label">Check si sos campeón del mundo</label>
                </div>
            </div>
            <div class="form-group mt-2">
                <label>Mensaje:</label>
                <textarea class="form-control" name="mensaje" rows="5"></textarea>
            </div>
            <button class="btn btn-primary mt-2 " type="submit">Enviar</button>
            <p class="text-muted">* Campos obligatorios</p>
        </form>
    </div>
	
    
    <footer>
        <ul>
            <li>Av. Rivadavia 1755 - CABA</li>
            <li>011-4444-6666</li>
            <li>contacto@lalibreria.com.ar</li>
        </ul>
    </footer>
</body>

</html>