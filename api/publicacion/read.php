<?php
/**
 * Creaton Integra - Creacion de nueva publicacion
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */

 require "../sesion/conexion.php";

 conexion($link);

 $id_bandera=$_POST["id_bandera"];

 $colleccion=array();

 // Consulta por linea
 $consulta=mysqli_query($link,
 "SELECT A.id_publicacion, A.id_usuario, A.titulo, A.contenido, A.aprovacion, A.visitas, A.fecha
  FROM publicaciones A, relaciones B, tags C
  WERE B.id_tag = $id_bandera AND B.id_publicacion = A.id_publicacion;");

  while ($item = mysqli_fetch_array($consulta)) {

  }

?>
