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
     header("Location: http://localhost/index/integra/web/blog/index.html");
   }
 }

?>
