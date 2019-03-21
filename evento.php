<!DOCTYPE html>
<html>
    <head>
        <?php require 'head.php'; ?>
    </head>
    <body>
        <?php require 'cabecera.php';?>

        <section id="principalAntes">
            <?php require 'barraLateral.php';?>
            
            <main class="borde" id="descripcion">
                <section id="imagenes">
                    <img class="imagenes" src="img/fotoEvento1.jpeg" alt="Foto descriptiva número 1"/>
                    <img class="imagenes" src="img/fotoEvento2.jpg" alt="Foto descriptiva número 2"/>
                </section>
                <h2 class="contenidoDesc" id="tituloEvento">Título del evento</h2>
                <dl class="contenidoDesc">
                  <dt class="contenidoDesc">Organizador:</dt>
                  <dd class="contenidoDesc">Cotán</dd>
                  <dt class="contenidoDesc">Fecha: </dt>
                  <dd class="contenidoDesc">07/03/2019</dd>
                </dl>
                <p class="contenidoDesc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel lectus cursus, pellentesque lectus vitae, consectetur quam. Pellentesque vulputate diam eu turpis aliquam, vitae viverra risus gravida. Donec nec venenatis libero. Fusce euismod nisi id leo mattis auctor. Nam sit amet dui maximus, pulvinar dolor at, viverra velit. Nullam tincidunt efficitur enim, at consectetur ipsum consectetur condimentum. In aliquam erat sed malesuada ullamcorper. Etiam laoreet justo in arcu posuere blandit. Aenean porttitor ultrices erat, faucibus tristique velit pellentesque vel. Sed bibendum metus a mauris sodales, ut venenatis dolor sodales. Nulla vehicula nisi eleifend, interdum mi et, fermentum quam. Nulla pretium iaculis sapien, quis sollicitudin nibh mattis nec. Donec condimentum elit vulputate mi lacinia aliquet. Nullam nec tristique nunc. Sed congue odio sed turpis viverra, ut ornare nibh blandit. Etiam scelerisque in leo nec condimentum. 
                </p>
                <button type="button">Contactar</button>

                <!-- En el propio botón cambiamos el display -->

                <button type="button" onclick="showComments()">Comentarios</button>

                <article id="redesSocialesEvento">
                    <a  href="#"><img class="logosRedesSocialesEvento" src="img/fb-logo.jpg"></a>
                    <a  href="#"><img class="logosRedesSocialesEvento" src="img/tw-logo.jpg"></a>
                    <a  href="evento_imprimir.html"><img class="logosRedesSocialesEvento" src="img/imprimir-logo.jpg"></a>
                </article>
            </main>

            <aside class="borde" id="apartadoComentarios">

                <div id="conjuntoComentarios">

                    <div class="comentario">
                        <p class="autores" >Autor: Francisco José Cotán López</p>
                        <p class="fechas" >Fecha: 16-07-1996</p>
                        <p class="horas" >Hora: 12:30</p>
                        <p class="textos">Texto: Hola, mi nombre es Fran</p>
                    </div>

                    <div class="comentario">
                        <p class="autores">Autor: Pedro Luis Fuertes Moreno</p>
                        <p class="fechas">Fecha: x </p>
                        <p class="horas">Hora: 13:00</p>
                        <p class="textos">Texto: Hola, mi nombre es Pedro</p>
                    </div>
                </div>

                <section id="formulario">
                    Nombre: <input class="introducido" type="text" name="name" value="name"><br>
                    Email: <input class="introducido" type="text" name="email" value="email"><br>
                    Texto: <input class="introducido" type="text" name="text" value="text"><br>
                    <button type="button" onclick="addComment()">Enviar formulario</button>
                </section>

            </aside>
        </section>

        <?php require 'pie.php';?>

        <script src="js/comentarios.js"></script>
    </body>
</html>