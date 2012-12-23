<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="utf-8"/>
    <meta name="description" content="Mi portafolio online, lugar donde alojo mis proyectos"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
    <link rel="stylesheet" type="text/css" href="css/default.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write("<script src='scripts/jquery.min.js'><\/script>");
    </script>
    <script src="scripts/jquery.nivo.slider.js">
    </script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<?php include 'cabecera.php'; ?>
<article class="contenedor"> 
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <a href="http://bextlan.com" target="_blank">
                    <img src="images/toystory.jpg" data-thumb="images/toystory.jpg" alt="hola" title="esto es un <a href='http://twitter.com/rickipsgx' target='_blank'>comentario</a>"/>
                </a>
                <img src="images/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption"/>
                <img src="images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
        </div>
    </div>
</article>
<article>
    <div id="cabecera">
        <h2 id="h2">&nbsp;&nbsp;-Novedades</h2>
        <div class="contenedor-logos">
            <a href="#"><img src="images/fb.png" class="logo"></a>
            <a href="#"><img src="images/twitter.png" class="logo"></a>
            <a href="#"><img src="images/google1.png" class="logo"></a>
        </div>
    </div>
    <section class="novedades">
        <h3 class="h">Nuevos turoriales de Diseño web en <a href="http://twitter.com/progvariada" target="_blank">Progvariada</a></h3>
        <p>Nuevos videotutoriales sobre dise&ntilde;o web en Progamacionvariada, en este caso hablare junto con <a href="http://twitter.com/McReizW" target="_blank">Reizon</a> sobre la creaci&oacute;n de un portal web (portafolio), en el cual podremos agregar nuestros datos personales, de contacto, y para trabajos.<br/>El objetivo de este curso es el de fomentar en las personas una cultura web, en la cual todos seamos capaces de manejar estas maravillosas tecnologias.
        </p>
        <section id="video">
            <div id="v1">
        <iframe  class="yt"src="http://www.youtube.com/embed/v4ylQpqBBr4" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="v2">
        <iframe class="yt" src="http://www.youtube.com/embed/0ZnkWj2YyYc" frameborder="0" allowfullscreen></iframe>
    </div>
        </section>
    </section>
</article>
<article>
    <section class="novedades">
        <h3 class="h">Nuevos cursos en rickipsgx</h3>
        <p>Se vienen nuevos cursos en rickipsgx, pensando en ustedes vamos a implementar cursos de dise&ntilde;o web (front-end y back-end), en el cual empezaremos desde los conceptos m&aacute;s b&aacute;sicos hasta llegar a un nivel suficiente. Con la implementacion del lenguaje php y la base de datos mysql, codearemos una pagina dinámica y que este a corde a los nuevos estandares del desarrollo web.<br/>
        ¿Responsive design?...... claro, como toda buen portal nuestro proyecto contara con la implementacion de responsive web design, con lo cual lograremos que nuestra web se visualice en todos los dispositivos m&oacute;viles sin la necesidad de hacer versiones diferentes para &eacute;stos. 
        </p>
    </section>
</article>
<footer>
    &copy; Todos los derechos reservados. Designed and developed by <a href="http://twitter.com/rickipsgx" target="_blank"><i>rick</i></a>
</footer>
</div>
</body>
