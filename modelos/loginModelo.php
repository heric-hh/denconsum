<?php
require_once 'mainModel.php';

class loginModelo extends mainModel {

    /* Modelo para iniciar sesión */

    protected static function iniciarSesionModelo( $datos ) {
        $sql = mainModel::conectar()->prepare("SELECT * FROM usuarios WHERE usuario=:Usuario AND passw=:Contra");
        $sql->bindParam(':Usuario', $datos['Usuario']);
        $sql->bindParam(':Contra', $datos['Contra']);
        $sql->execute();
        return $sql;
    }
}