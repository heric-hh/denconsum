<?php 

class vistasModelo {

    // Obtener las vistas que se van mostrando en index.php
    protected static function obtenerVistasModelo($vistas) {

        // Lista blanca de palabras que si pueden escribirse en la url y obtendra vistas
        $listaBlanca = [
            'home',
            'consumo',
            'inventario',
            'registrar-insumo',
            'entrada-salida',
            'abrir-lote',
            'caducidades',
            'usuarios',
            'agregar-usuario'
        ];

        if (in_array($vistas, $listaBlanca)) {
            if ( is_file('vistas/contenidos/' . $vistas . '-view.php') ) {
                $contenido = 'vistas/contenidos/' . $vistas . '-view.php';
            } else {
                $contenido = '404';
            }

        } else if ( $vistas == 'login' || $vistas == 'index' ) {
            $contenido = 'login';
        } else {
            $contenido = '404';
        }

        return $contenido;
    }
}