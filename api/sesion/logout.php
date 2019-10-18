<?php
/**
 * Creaton Integra - Logout en blog
 * @copyright Integra
 * @author Integra
 * @version 1.0 (Octubre 2019)
 * @since 1.0
 */

 session_start();

 session_destroy();

 header("Location: escribirunicacion");

?>
