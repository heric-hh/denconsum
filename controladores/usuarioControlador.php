<?php

if ( $peticionAjax ) {
    require_once '../modelos/usuarioModelo.php';   
} else {
    require_once 'modelos/usuarioModelo.php';
}

class usuarioControlador extends usuarioModelo{
    
    /* Controlador para agregar usuario */
    public function agregarUsuarioControlador() {
        $nombre = mainModel::limpiarCadena( $_POST['usuarioNombre_reg']);
        $apellidoPat = mainModel::limpiarCadena( $_POST['usuarioApePat_reg']);
        $apellidoMat = mainModel::limpiarCadena( $_POST['usuarioApeMat_reg']);
        $rol = mainModel::limpiarCadena( $_POST['usuarioRol_reg']);
        $usuario = mainModel::limpiarCadena( $_POST['usuarioUsuario_reg']);
        $contra1 = mainModel::limpiarCadena( $_POST['usuarioPassword_reg']);
        $contra2 = mainModel::limpiarCadena( $_POST['usuarioPassword2_reg'] );
  
        // Comprobar campos vacíos
        
        if ( $nombre == '' || $apellidoPat == '' || $apellidoMat == '' || $usuario == '' || $contra1 == '' ) {
            $alerta = [
                'Alerta' => 'simple',
                'Titulo' => 'Ocurrió un error inesperado.',
                'Texto' => 'No has llenado los campos que son obligatorios.',
                'Tipo' => 'error'
            ];
            echo json_encode($alerta);
            exit();
        }

        /* Comprobando nombre de usuario */

        $check_usuario = mainModel::ejecutarConsultaSimple("SELECT usuario FROM usuarios WHERE usuario = '$usuario' ");
        if ( $check_usuario->rowCount() > 0 ) {
            $alerta = [
                'Alerta' => 'simple',
                'Titulo' => 'Ocurrió un error inesperado.',
                'Texto' => 'El usuario ya está registrado. Intenta con otro nombre.',
                'Tipo' => 'error'
            ];
            echo json_encode($alerta);
            exit();
        }

        /* Comprobando claves */

        if ( $contra1 != $contra2 ) {
            $alerta = [
                'Alerta' => 'simple',
                'Titulo' => 'Ocurrió un error inesperado',
                'Texto' => 'Las contraseñas ingresadas no coinciden',
                'Tipo' => 'error'
            ];
            echo json_encode($alerta);
            exit();
        } else {
            $contra = mainModel::encryption($contra1);
        }

        /* Comprobar privilegio */

        if ( $rol < 1 || $rol > 3 ) {
            $alerta = [
                'Alerta' => 'simple',
                'Titulo' => 'Ocurrió un error inesperado.',
                'Texto' => 'El rol seleccionado no es válido.',
                'Tipo' => 'error'
            ];
            echo json_encode($alerta);
            exit();
        }

        $datosUsuario_reg = [
            'Nombre' => $nombre,
            'ApellidoPat' => $apellidoPat,
            'ApellidoMat' => $apellidoMat,
            'Rol' => $rol,
            'Usuario' => $usuario,
            'Contra' => $contra
        ];

        $agregarUsuario = usuarioModelo::agregarUsuario( $datosUsuario_reg);

        if ( $agregarUsuario->rowCount() == 1 ) {
            $alerta = [
                'Alerta' => 'limpiar',
                'Titulo' => 'Usuario registrado satisfactoriamente.',
                'Texto' => 'Los datos del usuario han sido registrados con éxito',
                'Tipo' => 'success'
            ];
            echo json_encode($alerta);

        } else {
            $alerta = [
                'Alerta' => 'simple',
                'Titulo' => 'Ocurrió un error inesperado.',
                'Texto' => 'No se pudo registrar el usuario.',
                'Tipo' => 'error'
            ];
            echo json_encode($alerta);
        }
    }
}