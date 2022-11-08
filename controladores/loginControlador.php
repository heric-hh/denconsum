<?php

if ( $peticionAjax ) {
    require_once '../modelos/loginModelo.php';   
} else {
    require_once 'modelos/loginModelo.php';
}

class loginControlador extends loginModelo {

    /* Controlador para iniciar sesion */
    public function iniciarSesionControlador() {
        $usuario = mainModel::limpiarCadena( $_POST['usuario_log'] );
        $contra = mainModel::limpiarCadena( $_POST['contra_log'] );

        /* Comprobar campos vacíos */
        if ( $usuario == '' || $contra == '' ) {
            echo '
            <script> 
                Swal.fire({
                    title: "Ocurrió un error inesperado",
                    text: "No has llenado todos los campos que son requeridos",
                    type: "error",
                    confirmButtonText: "Aceptar"
                });
            </script>';
        }

        // Sobreescribir la variable clave para desencriptar
        $contra = mainModel::decryption($contra);

        // Array que contiene los datos para iniciar sesion en el sistema
        $datos_login = [
            'Usuario' => $usuario,
            'Contra' => $contra
        ];

        $datos_cuenta = loginModelo::iniciarSesionModelo( $datos_login );

        if ( $datos_cuenta->rowCount() == 1 ) {
            $row = $datos_cuenta->fetch();

            // Variables de sesión para uso del sistema
            session_start(['name' => 'SGID' ]);
            $_SESSION['id_sgid'] = $row['idUsuario'];
            $_SESSION['nombre_sgid'] = $row['nombre'];
            $_SESSION['apellido_sgid'] = $row['apePaterno'];
            $_SESSION['usuario_sgid'] = $row['usuario'];
            $_SESSION['rol_sgid'] = $row['rol'];
            $_SESSION['token_sgid'] = md5( uniqid( mt_rand(), true ) );

            return header( 'Location: ' . SERVER_URL . 'home' );


        } else {
            echo "
            <script> 
            Swal.fire({
                title: 'Ocurrió un error inesperado',
                text: 'El usuario o clave son incorrectos.',
                type: 'error',
                confirmButtonText: 'Aceptar'
              })
            </script>";
        }
        
    }
}