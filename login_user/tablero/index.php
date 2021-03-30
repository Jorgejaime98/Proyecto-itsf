<?php
    /**
     * Archivo index: aqui se mostrara la salida de las vistas al usuario
     */

     // indica que el codigo del archivo referencias es obligatirio.
     // require
     // require_once Evita que el codigo se cargue mas de una vez.
     require_once "controlador/plantilla_controlador.php";
     require_once "controlador/formulario_controlador.php";
     

     $plantilla = new ControladorPlantilla();
     $plantilla->ctrTraerPlantilla();
?>