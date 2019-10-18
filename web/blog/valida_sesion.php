<?php
/**
 * Creaton Integra - Validar Sesion
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */

 function validaSesion()
 {
   session_start();

   if(!isset($_SESSION["acceso"]))
   {
     header("Location: http://172.30.173.30/index/integra/web/blog/index.html");
   }
 }

?>
