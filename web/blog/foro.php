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

    <a href="tread.php?tread=1"> <img class="login__cerrar" src="img/login_cerrar.png" alt=""> </a>
    <!--login cuadricula-->
    <div class="login__cuadricula">

      <div class="login__entradas">

        <a href="tread.php?tread=1">
        <div onclick="" class="login__entrada login__entrada-1" >
          <div class="box_entrada">
            <h1 class="titulo_img">Empleabilidad</h1>
          </div>
        </div>
        </a>

        <a href="tread.php?tread=2">
        <div class="login__entrada login__entrada-arriba login__entrada-2" >
          <div class="box_entrada">
            <h1 class="titulo_img">Transporte</h1>
          </div>
        </div>
        </a>

        <a href="tread.php?tread=3">
        <div class="login__entrada login__entrada-3" >
          <div class="box_entrada">
            <h1 class="titulo_img">Capacitación Trabajo</h1>
          </div>
        </div>
        </a>

      </div>

      <div class="login__entradas">

        <a href="tread.php?tread=4">
        <div class="login__entrada login__entrada-4" >
          <div class="box_entrada">
            <h1 class="titulo_img">Denuncias</h1>
          </div>
        </div>
        </a>

        <a href="tread.php?tread=5">
        <div class="login__entrada login__entrada-arriba login__entrada-5" >
          <div class="box_entrada">
            <h1 class="titulo_img">Finanzas</h1>
          </div>
        </div>
        </a>

        <a href="tread.php?tread=6">
        <div class="login__entrada login__entrada-6" >
          <div class="box_entrada">
            <h1 class="titulo_img">Espacios publicos</h1>
          </div>
        </div>
        </a>

      </div>

    </div>

    <!--JavaScript-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  </body>
</html>
