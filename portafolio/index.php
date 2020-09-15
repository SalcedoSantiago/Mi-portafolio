<?php include_once 'includes/templates/header.php'; ?>

<section id="hola" class="contenedor seccion-presentacion">
    <div class="presentacion imagen-presentacion">
        <img src="img/header.jpg" alt="">
    </div>
    <div class="presentacion">
        <h1>Hola soy <strong>Santiago Dalmiro Salcedo</strong></h1>
        <p>Web Developer con gran pasión por la programacion</p>
        <a href="#sobre-mi" class="btn">Ver más</a>
    </div>
</section>
<div id="sobre-mi">

</div>

<main class="seccion-sobre-mi">
    <div class="contenedor acerca-de-mi">
        <div class="sobre_mi">
            <div class="">
                <h2>Sobre mí</h2>
                <p>
                    Hola, soy Santiago Dalmiro Salcedo tengo 19 años. Me gusta todo lo relacionado con el desarrollo web y la programacion.
                    Soy muy autodidacta, me gusta aprender desde el medio que sea, ya sean videos, paginas webs, libros o proyectos subidos a internet.
                </p>
            </div>
            <div class="contenedor conocimientos">
                <h3>
                    Mis conocimientos
                </h3>
                <div class="campos">
                    <div class="campo">
                        <img src="img/html.png" alt="html">
                        <p>html</p>
                    </div>
                    <div class="campo">
                        <img src="img/css.png" alt="css">
                        <p>css</p>
                    </div>
                    <div class="campo">
                        <img src="img/js.png" alt="javaScript">
                        <p>js</p>
                    </div>
                    <div class="campo php">
                        <img src="img/php.png" alt="php">
                        <p>php</p>
                    </div>
                    <div class="campo">
                        <img src="img/sql.png" alt="MySql">
                        <p>MySql</p>
                    </div>
                    <div class="campo">
                        <img src="img/jquery.png" alt="bootstrap">
                        <p>Jquery</p>
                    </div>
                    <div class="campo">
                        <img src="img/angular.png" alt="Angular">
                        <p>angular</p>
                    </div>
                    <div class="campo">
                        <img src="img/bootstrap.png" alt="bootstrap">
                        <p>Bootstrap</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="mi-foto">
            <img src="img/santiago.jpeg" alt="Salcedo Santiago">
        </div>
    </div>
    <div id="proyectos"></div>
</main>

<section class="contenedor seccion-proyectos seccion">
    <h2>Proyectos</h2>
    <div class="marcadores">
        <a href="" class="seleccionado" id="todos">Todos</a>
        <a href="" id="html">Html/css</a>
        <a href="js">php/js/mysql</a>
    </div>
    <div class="contenedor-proyectos">
        <a class="mis-proyectos html-css" target="_blank" href="https://github.com/SalcedoSantiago/Mi-portafolio">
            <img src="img/portafolio.png" alt="Mi portafolio">
            <p>
                Mi portafolio
            </p>
        </a>
        <a class="mis-proyectos html-css" target="_blank" href="https://github.com/SalcedoSantiago/Blog-cafe">
            <img src="img/cafeteria.png" alt="blog-cafe">
            <p>
                blog sobre cafe
            </p>
        </a>
        <a class="mis-proyectos  html-css" target="_blank" href="https://github.com/SalcedoSantiago/BienesRaices">
            <img src="img/bienes.png" alt="bienes raices">
            <p>Bienes Raices</p>
        </a>
        <a class="mis-proyectos  html-css" target="_blank" href="https://github.com/SalcedoSantiago/freelancer">
            <img src="img/freelance.png" alt="freelance page">
            <p>Página de freelance</p>
        </a>
        <a class="mis-proyectos php-js" target="_blank" href="https://github.com/SalcedoSantiago/Uptask">
            <img src="img/lista-de-verificacion.png" alt="Uptask">
            <p>Uptask</p>
        </a>
        <a class="mis-proyectos php-js" target="_blank" href="https://github.com/SalcedoSantiago/practica-Gdlweb">
            <img src="img/conferencia.png" alt="Gdlwebcam">
            <p>Gdlwebcam</p>
        </a>
        <a class="mis-proyectos html-css" target="_blank" href="https://github.com/SalcedoSantiago/StoreFront">
            <img src="img/tienda-online.png" alt="FrontEnd store">
            <p>Tienda FrontEnd</p>
        </a>
        <a class="mis-proyectos php-js" id="php" target="_blank" href="https://github.com/SalcedoSantiago/agenda">
            <img src="img/portapapeles.svg" alt="Agenda">
            <p>Agenda php</p>
        </a>
        <a class="mis-proyectos html-css" target="_blank" href="https://github.com/SalcedoSantiago/Viajes">
            <img src="img/viajes.png" alt="viajes page">
            <p>Viajes</p>
        </a>
    </div>
</section>
<section id="contacto">
    <h2>Contacto</h2>
    <div class="contador parallax">

        <div class="contenedor contenido-telefono">
            <i><i class="fas fa-phone-alt"></i></i>
            <h2>Teléfono</h2>
            <p>1125709209</p>
        </div>
    </div>

    <div class="contenedor-contacto contenedor">
        <h3>Enviame un mensaje</h3>
        <form id="formulario" class="campos-contacto clearfix">
            <div class="campo-contacto">
                <input type="text" name="name" id="name" placeholder="Nombre y Apellido" value="" required>
            </div>
            <div class="campo-contacto bg-6">
                <input type="email" name="email" id="email" placeholder="Mail" value="" required>
            </div>
            <div class="campo-contacto bg-6">
                <input type="tel" name="telefono" id="telefono" placeholder="teléfono" value="" required>
            </div>
            <div class="campo-contacto">
                <textarea name="mensaje" id="mensaje" placeholder="Mensajes" required></textarea>
            </div>
            <input class="btn-contacto" type="submit" name="btn" id="btn" required>
        </form>

    </div>

</section>

<?php include_once 'includes/templates/footer.php'; ?>