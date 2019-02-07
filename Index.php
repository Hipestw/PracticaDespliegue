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
        <p><a href="http://www.aprendeaprogramar.com/">Aprende a Programar</a></p>
        <p><a href="https://conceptodefinicion.de/programacion-informatica/">Definición de Programación Informática</a></p>
        <p><a href="http://www.utn.edu.ec/reduca/programacion/fundamentos/un_poco_de_historia.html">Fundamentos de la programación</a></p>
      </div>
      <div class="col-sm-8 text-left">
        <h1>LENGUAJES DE PROGRAMACIÓN</h1><br/>
        <p class="p-3 mb-2 bg-info text-white">Un <b>lenguaje de programación</b> es un lenguaje formal que especifica una serie de instrucciones para que una
          computadora produzca diversas clases de datos.
          Los lenguajes de programación pueden usarse para crear programas que pongan en práctica algoritmos
          específicos los cuales controlan el comportamiento físico
          y lógico de una computadora.Está formado por un conjunto de símbolos y reglas sintácticas y semánticas que
          definen su estructura y el significado de sus
          elementos y expresiones. Al proceso por el cual se escribe, se prueba, se depura, se compila (de ser
          necesario) y se mantiene el código fuente de un programa
          informático se le llama programación.También la palabra programación se define como el proceso de creación de
          un programa de computadora, mediante la aplicación
          de procedimientos lógicos, a través de los siguientes pasos:<br/>
          El desarrollo lógico del programa para resolver un problema en particular.<br />
          Escritura de la lógica del programa empleando un lenguaje de programación específico (codificación del
          programa).<br />
          Ensamblaje o compilación del programa hasta convertirlo en lenguaje de máquina.<br />
          Prueba y depuración del programa.<br />
          Desarrollo de la documentación.</p><br/>

        <div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselCustom" data-slide-to="1"></li>
            <li data-target="#myCarouselCustom" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/codigo.png" class="img-rounded" alt="codigo">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="img/lenguajes.jpg" class="img-rounded" alt="lenguajes">
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img src="img/inteligencia.jpg" class="img-rounded" alt="inteligencia">
              <div class="carousel-caption"></div>
            </div>
          </div>
        </div>

        <hr>
        <h2>LOS 10 LENGUAJES DE PROGRAMACIÓN MÁS DEMANDADOS EN 2018</h2><br/>
        <p class="p-3 mb-2 bg-info text-white">
          <b>1. JAVA</b><br />
          Liderando el ranking encontramos a Java, el omnipresente. Ahora más reforzado con Android, el sistema
          operativo más utilizado del mundo. Un lenguaje de programación imprescindible, con el que no te faltará el
          trabajo. Según un estudio de LinkedIn, está dentro de las 20 habilidades más valoradas por los jefes.<br /><br/>
          <b>2. PYTHON</b><br />
          El segundo del top ten. El lenguaje multiplataforma y multiparadigma. Aplicado en el desarrollo web,
          extracción de datos, informática científica y aprendizaje automático. Soporta la orientación a objetos, la
          programación imperativa y funcional. Perfecto para principiantes.<br /><br/>
          <b>3. JAVASCRIPT</b><br />
          Más conocido como "el lenguaje de la web". Más del 95% de las webs de Internet son programadas con
          JavaScript, como Google Chrome, Firefox y Explorer. Además, presenta un enorme potencial de futuro a medida
          que el IoT y los dispositivos móviles se vuelven más populares. Esto le convierte en una habilidad
          indispensable para los desarrolladores.<br /><br/>
          <b>4. C++</b><br />
          El favorito de los programadores de videojuegos y aplicaciones de banca electrónica. Nace en 1983 de C y es
          uno de los más estudiados en la actualidad, a pesar de su complejidad comparado con JavaScript o Python. Es
          empleado para crear software en aplicaciones y sistemas, juegos para PC, controladores y firmware
          incorporado.<br /><br/>
          <b>5. C#</b><br />
          Dominar esta variante de C es esencial para todo programador. Con C# se desarrollan las aplicaciones de
          Microsoft. La compañía lo creó para funcionar con .NET Framework y utilizar un lenguaje más rápido y fácil.
          Muy demandado en el mercado laboral por la cantidad de usuarios de Windows, lo que le convierte en
          competencia directa con macOS e iOS.<br /><br/>
          <b>6. PHP</b><br />
          Este lenguaje es otro de los más populares e incrustado a HTML se utiliza para desarrollar páginas webs. Lo
          encontramos instalado en más de 20 millones de sitios web y es considerado uno de los más flexibles gracias a
          su Código Abierto. Ideal para los que se inician en programación.<br /><br/>
          <b>7. PERL</b><br />
          Lenguaje muy práctico para extraer información de archivos de texto y generar informes a partir del
          contendido de los ficheros. De uso gratuito, a pesar de su continuo avance, la preferencia por esta habilidad
          ha bajado entre los desarrolladores.<br /><br/>
          <b>8. SWIFT</b><br />
          Creado por Apple en 2014 para el desarrollo de aplicaciones en iOS, OS X, Apple TV y Watch OS. Su código es
          fácil de leer y escribir, cercano al inglés. La compañía anunció en 2017 que pronto hará su uso gratuito.<br /><br/>
          <b>9. R</b><br />
          Elegido como el lenguaje de programación preferido por los estadistas y los analistas. Es una herramienta
          para el cálculo numérico que permite generar gráficos de alta calidad, siendo muy útil para la minería de
          datos. Cuenta con una gran variedad de entornos de desarrollo que facilitan escribir scripts: R commander,
          RKWard y RStudio.<br /><br/>
          <b>10. RUST</b><br />
          Diseñado por Mozilla para ser un lenguaje seguro, concurrente y práctico, cualidades que lo hacen fácil de
          utilizar tanto por desarrolladores como por principiantes. Todo apunta a que en 2018, Rust va a alcanzar
          grandes cotas de popularidad.</p>

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

</body>

</html>