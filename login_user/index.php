<?php
    /**
     * Archivo index: aqui se mostrara la salida de las vistas al usuario
     */

     // indica que el codigo del archivo referencias es obligatirio.
     // require
     // require_once Evita que el codigo se cargue mas de una vez.
     require_once "controlador/login_controlador.php";
     
     $login = new ControladorLogin();
     $login->ctrTraerLogin();
?>