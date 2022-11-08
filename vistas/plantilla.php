<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <!-- * * * Links * * * -->
    <?php include_once 'inc/link.php' ?>

    <title> <?php echo COMPANY ?> </title>
</head>

<body>
    <?php 
        $peticionAjax = false;
        require_once 'controladores/vistasControlador.php';
        $iV = new vistasControlador();

        $vistas = $iV->obtenerVistasControlador();

        if ( $vistas == 'login' || $vistas == '404') {
            require_once 'vistas/contenidos/' . $vistas . '-view.php';
        } else {
            // NavBar
            include_once 'inc/navBar.php'?>
           
           <header>
               <?php include_once 'inc/fechaHeader.php' ?>
               <?php include_once 'inc/header.php'?>
           </header>
           
        <?php require_once $vistas;
        }
        
    require_once 'vistas/inc/script.php';?>
    
</body>

</html>