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

    <a href="foro.php"> <img class="login__cerrar" src="img/menu.png" alt=""> </a>

    <div class="login__cuadricula">
      <h1 class="titulo">¿Hospitales que cuenten con un buen tratamiento para la vista?</h1>
      <p class="subtitulo">Me agradaría alguno donde no me juzguen por mí situación económica.</p>

      <div class="linea"></div>
      <p class="subtitulo">Respuestas</p>

      <div class="tread__entradas">
        <a href="#">
          <div class="tread__entrada">
            <h1 class="tread__titulo">Muy mal comportamiento</h1>
            <p class="tread__subtitulo">Que mal que en pleno 2019 las personas sigan con comportamientos inapropiados.</p>
            <p> <i class="fas fa-user-circle"></i> <span class="autor">Luis Ernesto</span>
                <i class="far fa-eye"></i> <span>300</span>
                <i class="far fa-thumbs-up"></i> <span>50</span>
            </p>
          </div>
        </a>

        <a href="#">
          <div class="tread__entrada">
            <h1 class="tread__titulo">Recomendación, Hospital del Norte</h1>
            <p class="tread__subtitulo">Recomendación, Hospital del Norte</p>
            <p> <i class="fas fa-user-circle"></i> <span class="autor">Erick</span>
                <i class="far fa-eye"></i> <span>300</span>
                <i class="far fa-thumbs-up"></i> <span>50</span>
            </p>
          </div>
        </a>
      </div>
    </div>


    <!--JavaScript-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  </body>
</html>
