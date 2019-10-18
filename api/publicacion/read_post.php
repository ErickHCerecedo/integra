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

 $id_post=$_POST["id_post"];

 //Consulta por id
 $publicacion = mysqli_query($link,
 "SELECT A.id_publicacion, A.id_usuario, A.titulo, A.contenido, A.aprovacion, A.visitas, A.fecha, C.nombre
  FROM publicaciones A, relaciones B, tags C
  WERE A.id_publicacion = $id_post AND (A.id_publicacion = B.id_publicacion AND C.id_tag = B.id_tag);");

  while($item=mysqli_fetch_array($publicacion))
  {

    $result_arr=array('id_publicacion'=>$item[0], 'usuario'=>$item[1], 'titulo'=>$item[2], 'contenido'=>$item[3], 'aprovacion'=>$item[4], 'visitas'=>$item[5], 'fecha'=>$item[6], 'nombre'=>$item[7]);

  }

  echo json_encode(["data"=>$result_arr]);

  cerrarConexion($link);
?>
