<?php
$peticionAjax = true;
require_once '../config/app.php';

if ( isset ( $_POST['usuarioNombre_reg'] ) ) {
    
    /* Instancia al controlador */
    require_once '../controladores/usuarioControlador.php';
    $insUsuario = new usuarioControlador();

    if ( isset ( $_POST['usuarioNombre_reg'] )  && isset ( $_POST['usuarioUsuario_reg'] ) ) {
        echo $insUsuario->agregarUsuarioControlador();
    }
    

} else {
    session_start(['name' => 'SGID' ]);
    session_unset();
    session_destroy();
    header('Location: ' . SERVER_URL . 'login');
}
