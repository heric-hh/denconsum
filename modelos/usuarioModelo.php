<?php
require_once 'mainModel.php';

class usuarioModelo extends mainModel {
    
    /* Modelo para agregar usuario */
    protected static function agregarUsuario($datos) {
        $sql = mainModel::conectar()->prepare("INSERT INTO usuarios(usuario, nombre, apellidoPaterno, apellidoMaterno, passw, rol) 
        VALUES(:Usuario, :Nombre, :ApellidoPat, :ApellidoMat, :Contra, :Rol)" );
        
        $sql->bindParam(":Usuario", $datos['Usuario']);
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":ApellidoPat", $datos['ApellidoPat']);
        $sql->bindParam(":ApellidoMat", $datos['ApellidoMat']);
        $sql->bindParam(":Contra", $datos['Contra']);
        $sql->bindParam(":Rol", $datos['Rol']);

        $sql->execute();
        return $sql;
    }
}