<?php
/**
 * Creaton Integra - Crea la conexion con la Base de Datos
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */

 //Servidor
 $server="http://172.30.173.30/";
 //$server="";

 //Usuario
 $user="root";
 //$user="root";

 //Contraseña
 $password="";
 //$password="";

 //Genera la conexion con el servidor.
 $link=mysqli_connect($server,$user,$password);

 function conexion($conexion)
 {
   //Selecciona la base de datos
   mysqli_select_db($conexion,"integra");

   mysqli_query($conexion,"set autocommit=0;");
   mysqli_query($conexion,"start_transaction;");
 }

 function cerrarConexion($conexion)
 {
   mysqli_close($conexion);
 }


?>
