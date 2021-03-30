<?php
require_once "modelos/formulario_modelo.php";

class ControladorFormulario{

    // Controlador para manejar el registro del usuario al sistema.
    static public function ctrRegistro(){
        if (isset($_POST["RegistroUsuario"])) {
            $tabla = "usuario";

            $datos = array(
                "nombre" => $_POST["RegistroUsuario"],
                "email"  => $_POST["RegistroEmail"],
                "clave"  => $_POST["RegistroClave"]
            );

            //Una vez cargado mis datos desde el formulario web,
            //los paso al modelo respectivo.
            $respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }
        
    //Método para cargar todos los usuarios a la vista respectiva.
    static public function ctrSeleccionarRegistros(){
            
            $tabla = "usuario";

            $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla);

            return $respuesta;
        }
    }
?>