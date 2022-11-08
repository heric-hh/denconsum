<?php

require_once './modelos/vistasModelo.php';

class vistasControlador extends vistasModelo{

    // Obtener plantilla para mostrar en el index
    public function obtenerPlantillaControlador() {
        return require_once './vistas/plantilla.php';
    }

    // Controlador para obtener vistas
    public function obtenerVistasControlador() {
        if ( isset($_GET['views']) ) {
            $ruta = explode("/", $_GET['views']);
            $respuesta = vistasModelo::obtenerVistasModelo($ruta[0]);
        } else {
            $respuesta = 'Login';
        }

        return $respuesta;
    }
}