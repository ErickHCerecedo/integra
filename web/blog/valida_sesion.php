<?php
/**
 * Creaton Integra - Validar Sesion
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */
 /*header('Access-Control-Allow-Origin: *');
 header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
 header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
 header("Allow: GET, POST, OPTIONS, PUT, DELETE");
 $method = $_SERVER['REQUEST_METHOD'];
 if($method == "OPTIONS") {
     die();
 }*/

 function validaSesion()
 {
   session_start();

   if(!isset($_SESSION["acceso"]))
   {
     header("Location: index.html");
   }
 }

?>
