<?php
require_once "modelos/conexion.php";

class ModeloFormulario{

    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, clave) values (:nombre,:email,:clave)");

        $stmt->bindParam(":nombre",  $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email",   $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":clave",   $datos["clave"], PDO::PARAM_STR);

        if ($stmt->execute()){
            return "OK";
        } else {
            return Conexion::conectar()->errorInfo();
        }

       $stmt->close(); 
       $stmt = null;
    }

    //Seleccionar todos los registros de la tabla usuario.
    //Se retorna colección con las tuplas seleccionadas.
    static public function mdlSeleccionarRegistros($tabla){
        $stmt = Conexion::conectar()->prepare(" SELECT id_usuario, nombre, email FROM $tabla ORDER BY nombre");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;
    }
}

?>