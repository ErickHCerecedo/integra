<?php
/**
 * Creaton Integra - Login en blog
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */

 $usuario_correo=$_POST["usuario_correo"];
 $usuario_contrasena=$_POST["usuario_contrasena"];

 echo $usuario_correo;
 
 $usuario_correo=$_GET["usuario_correo"];

 echo $usuario_correo;
 //	-->	Verificar usuario	<--	//
 $verificar = mysqli_query($link, "SELECT id, nombre FROM usuarios WHERE correo = $usuario_correo AND contrasena = $usuario_contrasena;");

 if($existe = mysql_fetch_array($verificar))
 {
   session_start();
   $_SESSION["acceso"]=1;

   echo $existe;
 }
 else
   echo 0;

?>
