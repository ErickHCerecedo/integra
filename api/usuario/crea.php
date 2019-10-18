<?php
/**
 * Creaton Integra - Registro de usuario
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */

 require "../sesion/conexion.php";

 $usuario_nombre=$_POST["usuario_nombre"];
 $usuario_correo=$_POST["usuario_correo"];
 $usuario_contrasena=$_POST["usuario_contrasena"];

 conexion($link);

 //	-->	Verificar usuario exitente	<--	//
 $verificar = mysqli_query($link, "SELECT id_usuario FROM usuarios WHERE correo = $usuario_correo;");

 $existe = mysqli_fetch_array($verificar);

 if($existe) //	-->	Si existe usuario, obtener id
 {
   echo json_encode([
     "response"=>false,
     "error"=>"Existe usuario."
   ]);
 }
 else { //	-->	Si no existe usuario, crea nuevo registro en tabla clientes

   $insert_usuario = mysqli_query($link,"INSERT INTO usuarios VALUES(NULL,'$usuario_nombre','$usuario_correo','$usuario_contrasena', NOW());") or die("Error: ".mysqli_error($link));

   if($insert_usuario===true)
   {
     mysqli_query($link,"commit;");
     echo json_encode([
       "response"=>true,
       "data"=>"Usuario registrado correctamente."
     ]);
   }
   else
   {
     mysqli_query($link,"rollback;");
     echo json_encode([
       "response"=>false,
       "error"=>"Error al insertar usuario."
     ]);
   }

 }

 cerrarConexion($link);

?>
