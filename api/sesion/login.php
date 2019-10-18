<?php
/**
 * Creaton Integra - Login en blog
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */
 /* header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
  header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  header("Allow: GET, POST, OPTIONS, PUT, DELETE");
  $method = $_SERVER['REQUEST_METHOD'];
  if($method == "OPTIONS") {
      die();
  }*/

 require "../sesion/conexion.php";

 conexion($link);

 $usuario_correo=$_POST["usuario_correo"];
 $usuario_contrasena=$_POST["usuario_contrasena"];

 //	-->	Verificar usuario	<--	//
 $verificar = mysqli_query($link,
 "SELECT id_usuario, nombre
 FROM usuarios
 WHERE correo = '$usuario_correo' AND contrasena = '$usuario_contrasena';")  or die("Error: ".mysqli_error($link));

 $accesoArreglo=array();

 $existe = mysqli_fetch_array($verificar);

 if($existe)
 {
   session_start();
   $_SESSION["acceso"]=1;

   $collection = array(
     "id"=>$existe[0],
     "nombre"=>$existe[1],
   );

   array_push($accesoArreglo,$collection);

   //$accesoArreglo = utf8_converter($accesoArreglo);

   echo json_encode([
     "response"=>true,
     "data"=>$accesoArreglo,
   ]);

 }
 else
 {
   echo json_encode([
     "response"=>false,
     "error"=>"Usuario o contaseña incorrectos."
   ]);
 }

 function utf8_converter($array)
 {
   array_walk_recursive($array, function(&$item, $key){
     if(!mb_detect_encoding($item, 'utf-8', true)){
       $item = utf8_encode($item);
     }
   });
   return $array;
 }

    cerrarConexion($link);

?>
