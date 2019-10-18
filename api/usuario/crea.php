<?php
/**
 * Creaton Integra - Registro de usuario
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */

 require "../sesion/conexion.php";

 $usuario_nombre=$_POST["ususario_nombre"];
 $usuario_correo=$_POST["ususario_correo"];
 $usuario_contrasena=$_POST["ususario_contrasena"];

 conexion($link);

 //	-->	Verificar usuario exitente	<--	//
 $verificar = mysqli_query($link, "SELECT id_usuario FROM usuarios WHERE correo = $usuario_correo;");

 if($existe = mysql_fetch_array($verificar)) //	-->	Si existe usuario, obtener id
 {
   $id_usuario=mysqli_insert_id($link);
 }
 else { //	-->	Si no existe usuario, crea nuevo registro en tabla clientes

   $insert_usuario = mysqli_query($link,"INSERT INTO usuarios VALUES(null,'$usuario_nombre','$usuario_correo','$usuario_contrasena',NOW());");
   if ($insert_usuario)
   {
     $id_usuario=mysqli_insert_id($link);
     mysqli_query($link,"commit;");
     echo true;
   }
   else
   {
     mysqli_query($link,"rollback;");
     echo false;
   }

 }

 echo true;

 cerrarConexion($link);

?>
