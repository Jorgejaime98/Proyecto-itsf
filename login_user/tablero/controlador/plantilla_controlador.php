<?php
    class ControladorPlantilla{
        /* Metodo para la llamada a la plantilla. */

        public function ctrTraerPlantilla(){
            /*include  Se utiliza para cargar codigo proveniente desde otros archivos. */
            
            include "vistas/parte_superior.php";
            include "vistas/parte_inferior.php";
            
        }
    }
?>