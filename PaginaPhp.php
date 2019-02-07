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
        <p><a href="https://es.wikipedia.org/wiki/PHP">Wikipedia PHP</a></p>
        <p><a href="https://desarrolloweb.com/php/">PHP a fondo</a></p>
        <p><a href="https://www.ionos.es/digitalguide/paginas-web/creacion-de-paginas-web/tutorial-de-php-fundamentos-basicos-para-principiantes/">PHP para principiantes</a></p>
      </div>
      <div class="col-sm-8 text-left">
        <h1>Historia de PHP</h1><br/>
        <p class="p-3 mb-2 bg-info text-white">PHP, acrónimo recursivo en inglés de PHP: Hypertext Preprocessor
          (preprocesador de hipertexto), es un lenguaje de programación de propósito general de código del lado del
          servidor originalmente diseñado para el desarrollo web de contenido dinámico. Fue uno de los primeros
          lenguajes de programación del lado del servidor que se podían incorporar directamente en un documento HTML en
          lugar de llamar a un archivo externo que procese los datos. El código es interpretado por un servidor web con
          un módulo de procesador de PHP que genera el HTML resultante.
          PHP ha evolucionado por lo que ahora incluye también una interfaz de línea de comandos que puede ser usada en
          aplicaciones gráficas independientes. Puede ser usado en la mayoría de los servidores web al igual que en
          muchos sistemas operativos y plataformas sin ningún costo.
          Fue creado originalmente por Rasmus Lerdorf en el año 1995. Actualmente el lenguaje sigue siendo desarrollado
          con nuevas funciones por el grupo PHP.2​ Este lenguaje forma parte del software libre publicado bajo la
          licencia PHPv3_01, es una licencia Open Source validada por Open Source Initiative. La licencia de PHP es del
          estilo de licencias BSD, esta licencia no tiene restricciones de copyleft" asociadas con GPL.</p><br/>

        <div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselCustom" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/php.jpg" class="img-rounded"" alt="codigo">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="img/php2.jpg" class="img-rounded" alt="lenguajes">
              <div class="carousel-caption"></div>
            </div>
          </div>
        </div>

        <hr>
        <h2>3 Consejos para crear aplicaciones PHP seguras</h2><br/>
        <p class="p-3 mb-2 bg-info text-white">Uno de los lenguajes de programación más populares en el desarrollo de
          sitios web, es sin duda <b>PHP</b>. Es bien cierto que PHP es un lenguaje muy sencillo y muy completo, sin embargo,
          si no tenemos el cuidado necesario, podemos caer en ciertos agujeros de seguridad.<br/>

          Veamos tres consejos para evitar las más comunes fallas de seguridad en PHP.<br/>

          <b>1.Usa mensajes de error que sean apropiados.</b><br/>

          Durante la fase de desarrollo, los mensajes de error son nuestros mejores aliados, pues nos ayudan a
          encontrar errores sintácticos, datos incorrectos, entre otros. Repito, son amigos durante el desarrollo,
          pero, una vez en línea, se convierten en el enemigo, mostrando a los usuarios información importante sobre tu
          aplicación, como por ejemplo, nombre de la base de datos, estructuras, variables, archivos que se ejecutan, y
          un largo etcétera.<br/>

          Es por esta razón que debes asegurarte de haber ocultado los reportes de errores. ¿Cómo hacerlo? Muy
          sencillo, coloca la siguiente línea de código al inicio de tus archivos:<br/>

          error_reporting(0)<br/>
          La función error_reporting(nivel de error) establece la directiva error_reporting en tiempo de ejecución. Al
          pasarle el valor 0, desactiva todas las notificaciones de errores. También es importante saber, que al pasar
          el valor -1, se mostrarán todos los errores posibles.<br/>

          <b>2. Valida las entradas de usuario (inputs)</b><br/>

          Seamos sinceros, en la mayoría de aplicaciones que desarrollamos (si no es que en todas), sabemos que tipos
          de datos esperamos, como ejemplo: fechas, números, textos, contraseñas, direcciones de correo, teléfonos,
          etc., por lo que, no tenemos excusa para no validar lo que el usuario está ingresando. Si quieres protegerte
          de posibles ataques, asegúrate de que tus usuarios solo puedan ingresar datos apropiados (el tipo de dato que
          esperas, y no más)<br/>

          ¿Cómo hacerlo? La mejor manera es usando expresiones regulares. Puedes encontrar una lista de las más comunes
          y solicitadas en este enlace<br/>

          Para el manejo de expresiones regulares en php, está la función preg_match(). Ejemplo:<br/>

          if ( ! preg_match( “^([a-zA-Z]|[0-9])+$”, $GET_[‘user’])) {<br/>
          //handle error<br/>
          }<br/>
          En el ejemplo, validamos que la variable ‘user’ sea estrictamente una cadena alfanúmerica. Como consejo
          personal, asegúrate de no permitir signos como el igual (=), la coma (,), las comillas simples (‘) y el guión<
          medio (-).<br/>

          En cada validación, si el dato proporcionado por el usuario no coincide con el formato que esperamos,
          muéstrale al usuario un mensaje de error o hazle saber cómo debe de ingresar la información.<br/>

          <b> 3. Previene los ataques XSS (Cross Site Scripting)</b><br/>

          En la actualidad, la mayoría de las aplicaciones web son interactivas, lo cual implica que muchas de las
          entradas del usuario son mostradas de alguna manera, por lo tanto, permitir HTML en una entrada resulta
          peligroso, puesto que permite que Javascript sea ejecutado.<br/>

          Hay algunas maneras de protegerse de estos ataques, la mejor, desde luego, es no permitir HTML completo,
          aunque muy probablemente ésta sea una opción para aplicaciones tipo foros o blogs.<br/>

          Para estos casos, quizás prefieras solo permitir ciertos tags o permitir BBCode para permitir que tus
          usuarios le den cierto formato personalizado sin que sea un riesgo para ti.<br/>

          También puedes filtrar la entrada a través de la función htmlentities() cada vez que imprimas el valor de una
          variable de entrada en la salida.<br/><br/>

          Estos son solo algunos ejemplos de lo que puedes hacer para que tus aplicaciones web sean más seguras. La
          seguridad en la web es un tema tan importante tanto como su tamaño (gigante). Recuerda, que como
          desarrollador web, es tu responsabilidad la seguridad de tus aplicaciones, así como mantenerte actualizado en
          lo que refiere a esta temática. Si quieres aprender más, en el manual de php hay una sección extensa sobre
          Seguridad.</p><br/>

          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="videos/video.mp4"></iframe>
         </div>

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