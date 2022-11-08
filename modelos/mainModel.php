<?php

if($peticionAjax) {
    require_once '../config/server.php';
} else {
    require_once 'config/server.php';
}

class mainModel {
    
    /* Funcion para conectar a la base de datos */
    protected static function conectar() {
        $conexion = new PDO(SGID, USER, PASS);
        $conexion->exec("SET CHARACTER SET utf8");

        return $conexion;
    }

    /* Funcion para realizar consultas simples */
    protected static function ejecutarConsultaSimple($consulta) {
        $sql = self::conectar()->prepare($consulta);
        $sql->execute();

        return $sql;
    }

    /* Encriptar cadenas  */

    public function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }

    /* Desencriptar cadenas  */

    protected static function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

    /* Funcion generar codigos aleatorios  */
    
    protected static function generarCodigoAleatorio($letra, $longitud, $numero) {
        for($i = 1; $i <= $longitud; $i++) {
            $aleatorio = rand(0,9);
            $letra .= $aleatorio;             
        }

        return $letra . ' - ' . $numero;
    }

    /* Funcion para limpiar cadenas */
    protected static function limpiarCadena($cadena) {
        $cadena = trim($cadena); // Quitar espacios en blanco
        $cadena = stripslashes( $cadena ); // Quitar diagonales invertidas
        $cadena = str_ireplace('<script>', '', $cadena ); //Evitar scripts en la entrada
        $cadena = str_ireplace('</script>', '', $cadena );
        $cadena = str_ireplace('<script src', '', $cadena );
        $cadena = str_ireplace('<script type=', '', $cadena );
        $cadena = str_ireplace('SELECT * FROM', '', $cadena );
        $cadena = str_ireplace('DELETE * FROM', '', $cadena );
        $cadena = str_ireplace('INSERT INTO', '', $cadena );
        $cadena = str_ireplace('DROP TABLE', '', $cadena );
        $cadena = str_ireplace('DROP DATABASE', '', $cadena );
        $cadena = str_ireplace('TRUNCATE TABLE', '', $cadena );
        $cadena = str_ireplace('SHOW TABLES', '', $cadena );
        $cadena = str_ireplace('<?php', '', $cadena );
        $cadena = str_ireplace('?>', '', $cadena );
        $cadena = str_ireplace('--', '', $cadena );
        $cadena = str_ireplace('<', '', $cadena );
        $cadena = str_ireplace('>', '', $cadena );
        $cadena = str_ireplace('[', '', $cadena );
        $cadena = str_ireplace(']', '', $cadena );
        $cadena = str_ireplace('^', '', $cadena );
        $cadena = str_ireplace('==', '', $cadena );
        $cadena = str_ireplace(';', '', $cadena );
        $cadena = str_ireplace('::', '', $cadena );
        $cadena = stripslashes( $cadena ); // Quitar diagonales invertidas
        $cadena = trim($cadena); // Quitar espacios restantes

        return $cadena;
    }


    /* FUncion para verificar datos */
    

    /* Funcion para paginar tablas */
    protected static function paginarTablas( $pagina, $numPaginas, $url, $botones ) {
        $tabla = '<nav class="paginacion-nav">
                    <ul class="paginacion-list">';
        
        if ( $pagina == 1 ) {
            $tabla .=   '<li class="paginacion-item disabled">
                         <a class="paginacion-link"> <i class="fa-sharp fa-solid fa-arrow-left"></i> </a>
                        </li>';
            
        } else {
            $tabla .=   '<li class="paginacion-item">
                        <a href="'. $url . '1/" class="paginacion-link"> <i class="fa-sharp fa-solid fa-arrow-left"></i> </a>
                        </li> 
                        <li class="paginacion-item">
                        <a href="'. $url . ($pagina - 1) . '/" class="paginacion-link"> <i class="fa-sharp fa-solid fa-arrow-left"></i> </a>
                        </li>';
        }

        $ci = 0;
        for ($i = $pagina; $i <= $numPaginas; $i++) { 
            if ( $ci >= $botones ) {
                break;
            }

            if ( $pagina == $i ) {
                $tabla .= '<li class="paginacion-item">
                            <a href="'. $url . $i . '/" class="paginacion-link active"> '. $i .' </a>
                            </li>';
            } else {
                $tabla .= '<li class="paginacion-item">
                            <a href="'. $url . $i . '/" class="paginacion-link"> '. $i .' </a>
                            </li>';
            }
            $ci++;
         }

        if ( $pagina == $numPaginas ) {
            $tabla .=   '<li class="paginacion-item disabled">
                         <a class="paginacion-link"> <i class="fa-sharp fa-solid fa-arrow-right"></i> </a>
                        </li>';
            
        } else {
            $tabla .= '<li class="paginacion-item">
                        <a href="'. $url . ($pagina + 1) . '/" class="paginacion-link"> <i class="fa-sharp fa-solid fa-arrow-left"></i>Siguiente</a>
                        </li>
                        <li class="paginacion-item">
                        <a href="'. $url . $numPaginas . '/" class="paginacion-link"> <i class="fa-sharp fa-solid fa-arrow-right"></i> </a>
                        </li>'; 
                    }

        $tabla .= '</ul> </nav>';

        return $tabla;
    }

}