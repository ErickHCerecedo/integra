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

 $id_usuario=$_POST["id_usuario"];
 $publicacion_titulo=$_POST["publicacion_titulo"];
 $publicacion_contenido=$_POST["publicacion_contenido"];
 $publicacion_tag=$_POST["publicacion_tag"];

 conexion($link);

 $publicacion = mysqli_query($link, "INSERT INTO publicaciones VALUES(null, $id_usuario, '$publicacion_titulo', '$publicacion_contenido', null, null, NOW());");
 if ($publicacion) {
   $id_publicacion = mysqli_insert_id($link)
   mysqli_query($link,"commit;");
   echo true;
 }
 else {
   mysqli_query($link,"rollback;");
   echo false;
 }

 $relacion = mysqli_query($link, "INSERT INTO relaciones VALUES(null, $publicacion_tag, $id_publicacion, NOW());");
 if ($relacion) {
   mysqli_query($link,"commit;");
   echo true;
 }
 else {
   mysqli_query($link,"rollback;");
   echo false;
 }

 echo true;

 cerrarConexion($link);

?>
