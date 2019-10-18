<?php
/**
 * Creaton Integra - Creacion de nueva publicacion
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */
 /*/
 header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

/*/
 require "../sesion/conexion.php";

 conexion($link);

 $id_bandera=$_POST["id_bandera"];

 echo $id_bandera;

 $colleccion=array();

 // Consulta por linea
 $consulta=mysqli_query($link,
 "SELECT A.id_publicacion, A.id_usuario, A.titulo, A.contenido, A.aprovacion, A.visitas, A.fecha
  FROM publicaciones A, relaciones B, tags C
  WERE B.id_tag = $id_bandera AND B.id_publicacion = A.id_publicacion;");

  $item = mysqli_fetch_array($consulta);

  while ($item) {

    $result_arr = array('id_publicacion'=>$item[0], 'usuario'=>$item[1], 'titulo'=>$item[2], 'contenido'=>$item[3], 'aprovacion'=>$item[4], 'visitas'=>$item[5], 'fecha'=>$item[6]);

    array_push($colleccion,$result_arr);
  }

  echo json_encode(["data"=>$colleccion]);

  cerrarConexion($link);

?>
