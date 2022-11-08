<nav class="barra-lateral">
    <!-- Detalles del perfil -->
    <div class="perfil-contenedor">
        <div class="perfil-imagen">
            <img src="vistas/img/logoAdmin.svg">
        </div>
        <div class="usuario-rol">
            <span class="saludo"> Buenos dias 👋 </span>
            <span class="nombre"> Tania García </span>
            <span class="rol"> Administradora </span>
            <!-- SALUDO DE ACUERDO A LA HORA DEL DIA -->    
        </div>    
        <div class="desplegar-barra-lateral">
                <!-- Flechas -->
                <img src="vistas/img/burger.svg" id="btn">
        </div>
    </div>

    <ul class="nav-lista">
        <li class="nav-item">
            <a href="<?php echo SERVER_URL; ?>consumo" class="nav-link">
                <!-- Icono de consumo -->
                <img src="vistas/img/consumo.svg">
                <span class="nombre-link"> Consumo </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo SERVER_URL; ?>inventario" class="nav-link">
                <!-- Icono de Insumos -->
                <img src="vistas/img/insumos.svg">   
                <span class="nombre-link"> Insumos </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo SERVER_URL; ?>reporte" class="nav-link">
                <!-- Icono de Reportes -->
                <img src="vistas/img/reporte.svg">
                <span class="nombre-link"> Reportes </span>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?php echo SERVER_URL; ?>usuarios" class="nav-link">
                <!-- Icono de usuario -->
                <img src="vistas/img/usuarios.svg">
                <span class="nombre-link"> Usuarios </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo SERVER_URL ?>" class="nav-link">
                <!-- Icono de cerrar sesion -->
                <img src="vistas/img/logout.svg" alt="">
                <span class="nombre-link"> Cerrar Sesión </span>
            </a>
        </li>
    </ul>
</nav>