<!DOCTYPE html>
<html lang="es">

<head>
  <title>Lenguajes de Programación</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estiloWeb.css">
</head>

<body>

  <?php
    include "includes/header.inc"
  ?>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <p><a href="https://es.wikipedia.org/wiki/JavaScript">Wikipedia JavaScript</a></p>
        <p><a href="https://www.w3schools.com/js/">JavaScript tutorial</a></p>
        <p><a href="https://developer.mozilla.org/es/docs/Learn/JavaScript/First_steps">Primeros pasos JavaScript</a></p>
      </div>
      <div class="col-sm-8 text-left">
        <h1>¿Que es Javascript?</h1><br/>
        <p class="p-3 mb-2 bg-info text-white"><b>Javascript</b> es un lenguaje con muchas posibilidades, utilizado para crear
          pequeños programas que luego son insertados en una página web y en programas más grandes, orientados a
          objetos mucho más complejos. Con Javascript podemos crear diferentes efectos e interactuar con nuestros
          usuarios.<br /><br />

          Este lenguaje posee varias características, entre ellas podemos mencionar que es un lenguaje basado en
          acciones que posee menos restricciones. Además, es un lenguaje que utiliza Windows y sistemas X-Windows, gran
          parte de la programación en este lenguaje está centrada en describir objetos, escribir funciones que
          respondan a movimientos del mouse, aperturas, utilización de teclas, cargas de páginas entre otros.<br /><br />

          Es necesario resaltar que hay dos tipos de JavaScript: por un lado está el que se ejecuta en el cliente, este
          es el Javascript propiamente dicho, aunque técnicamente se denomina Navigator JavaScript. Pero también existe
          un Javascript que se ejecuta en el servidor, es más reciente y se denomina LiveWire Javascript.</p><br/>

        <div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselCustom" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/javascript.jpg" class="img-rounded" alt="codigo">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="img/javascript2.jpg" class="img-rounded" alt="lenguajes">
              <div class="carousel-caption"></div>
            </div>
          </div>
        </div>

        <hr>
        <h2>Curiosidades de JavaScript</h2><br/>
        <p class="p-3 mb-2 bg-info text-white">
          1.<b>Null es un objeto</b><br/>
          2.<b>NaN es un número</b><br/>
          3.<b>array() ‘==’ False</b> es True<br/>
          4.La función <b>replace() acepta como parámetro <b>funciones callback<br/>
          5.Las <b>expresiones regulares</b> se pueden testear con <b>test()</b> además de con match()<br/>
          6.Puedes <b>falsear el alcance de una variable o función<br/>
          7.<b>Las funciones se pueden ejecutar a si mismas</b><br/>
          8.<b>Firefox</b> no lee y devuelve los colores en hexadecimal sino en <b>RGB</b><br/>
          9.<b>0.1 + 0.2 ‘!==’ 0.3</b><br/>
          10.<b>Undefined puede ser definido</b>, es decir, que no es una palabra reservada.</p>

          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="videos/code.mp4"></iframe>
          </div>

          <!-- inio comentarios -->
          <hr>
          <h1>Déjanos tu opinión en los comentarios:</h1>
          <hr/>
          <div>

            <h4>Por favor escribe un comentario: </h4><br/>
            <form action="PaginaJavascript.php" method="POST" enctype="multipart/form-data">
	            <input type="text" name='nombre' required placeholder="Nombre"><br/>	
              <input type="hidden" name="fecha" value="25/02/2019">
              <input type="hidden" name="lenguaje" value="PaginaJavascript.php">
              <textarea name="comentario" rows="4" cols="50" placeholder="Escribe aquí tu comentario"></textarea><br/>
              <input type="submit" value="Enviar" />
            </form>
          </div>
          <div>
            <h4>Estos usuarios ya han dejado su comentario:</h4>

            <form action="PaginaJavascript.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="lenguaje" value="PaginaJavascript.php">   
              <input type="hidden" name="fecha" value="no">
              <input type="submit" value="Ver comentarios" /> 
            </form>
          </div>

	<?php include 'script.php'; ?> 
	<!-- fin comentarios -->

      </div>
      <div class="col-sm-2 sidenav">
        <div class="well">
          <p class="text-primary">Muchos lenguajes por aprender</p>
        </div>
        <div class="well">
          <p class="text-success">¿Te animas?</p>
        </div>
        <div class="well">
          <p class="text-primary">Seguro que te gusta</p>
        </div>

      </div>
    </div>
  </div>

  <?php
    include "includes/paginacion.inc"
  ?>

  <?php
    include "includes/footer.inc"
  ?>

</body >

</html >
