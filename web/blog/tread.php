<?php
  /**
   * Creaton Integra - Entra al menu blog
   * @copyright Integra
   * @author Integra
   * @version 1.0 (Octubre 2019)
   * @since 1.0
   */

  include "valida_sesion.php";

  validaSesion();

  $tread = $_GET["tread"];

?>

<!DOCTYPE html>
<!--
    Creaton 2019 V1.0
    Hecho por Integra
    Última actualización: Octubre 2019
    Soporte: erickcerecedo@gmail.com; joecort3@gmail.com
-->

<html lang="es">
  <head>
    <!--Básico-->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!--Metadatos-->
    <title>Creaton 2019 | Integra</title>
    <meta name="Integra" content="Integra">
		<meta name="copyright" content="Integra">
		<meta name="robots" content="index,follow">

    <!--Redes sociales-->

    <!--Favicons-->

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <script src="https://kit.fontawesome.com/53962f66ad.js" crossorigin="anonymous"></script>

  </head>
  <body>

    <!--login menu-->
    <div class="login__menu">
      <div class="login__usuario">
        <a href="../"><img src="img/logo_black.png" alt=""></a>
        <!--p class="login__direccion"><span>/</span> Foro</p-->
      </div>

      <div class="login__usuario">
        <p><i class="fas fa-user-circle"></i> <span id="nombre_ususario">Erick H.</span></p>
      </div>
    </div>

    <a href="foro.php"> <img class="login__cerrar" src="img/menu.png" alt=""> </a>

    <div class="login__cuadricula">
      <div class="tread__entradas">
        <a href="viewpost.php?post=1">
          <div class="tread__entrada">
            <h1 class="tread__titulo">¿Los derechos humanos son importantes?</h1>
            <p class="tread__subtitulo">Una de mis mayores dudas.</p>
            <p> <i class="fas fa-user-circle"></i> <span class="autor">Jose Cortes Sarmiento</span>
                <i class="far fa-eye"></i> <span>300</span>
                <i class="far fa-thumbs-up"></i> <span>50</span>
            </p>
          </div>
        </a>

        <a href="viewpost.php?post=1">
          <div class="tread__entrada">
            <h1 class="tread__titulo">¿Los derechos humanos son importantes?</h1>
            <p class="tread__subtitulo">Una de mis mayores dudas.</p>
            <p> <i class="fas fa-user-circle"></i> <span class="autor">Jose Cortes Sarmiento</span>
                <i class="far fa-eye"></i> <span>300</span>
                <i class="far fa-thumbs-up"></i> <span>50</span>
            </p>
          </div>
        </a>

      </div>
    </div>

    <!--JavaScript-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">

      var ruta = "http://localhost/index/integra/api/";

      $.ajax({
        type: "POST",
        headers: { 'Access-Control-Allow-Origin': '*' },
        crossDomain: true,
        //async: false,
        url: ruta + "publicacion/read.php",
        data: {
          id_bandera: <?php echo $tread ?>,
        },
        success: function(response)
        {
          var response = JSON.parse(response);

          if(response.response == true)
          {
            alert("Work");
          }
          else
          {
            //$("#alerta").text("Correo o contraseña incorrecto");
            alert("Correo o contraseña incorrecto");
          }
        },
        error: function()
        {
          //$("#alerta").text("No se pudo conectar con el servidor");
          alert("No se pudo conectar con el servidor");
        }
      });

    </script>
  </body>
</html>
