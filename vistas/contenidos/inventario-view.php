
<main>
    <?php require_once 'vistas/inc/navBarInsumos.php' ?>

    <div class="inventario-seccion">
    <!-- BARRA DE BUSQUEDA  -->
    <section class="barra-busqueda">
        <div class="buscar-area">
            <label> Buscar Insumo </label>
            <div class="buscar-input-icon">
                <img src="vistas/img/buscar-input.svg">
                <input type="text" class="buscar-input" placeholder="Aceite...">
            </div>
        </div>

        <div class="categoria-area">
            <label> Categoría </label>
            <select name="seleccionar-categoria" id="">
                <option value=""> --- </option>
                <option value=""> Cuadro Básico </option>
                <option value=""> Analgésicos </option>
                <option value=""> Material de Curación </option>
            </select>
        </div>

        <div class="disponible-area">
            <label> Disponible </label>
            <input type="checkbox">
        </div>

        <div class="registrar-insumo-area">
            <a href="<?php echo SERVER_URL; ?>registrar-insumo">
            <button id="btn-registrar-insumo" class="confirmar">
                <img src="vistas/img/agregar.svg">
                <span> Registrar Nuevo Insumo </span>
            </button>
            </a>
        </div>
    </section>

    <!-- Mostrar los resultados de la busqueda-->
    <section id="resultados-busqueda"></section>

    <!-- Paginacion -->
    <nav class="paginacion-nav">
        <ul class="paginacion-list">
            <li class="paginacion-item">
                <a href="" class="paginacion-link"> Anterior </a>
            </li>
            <li class="paginacion-item">
                <a href="" class="paginacion-link">1</a>
            </li>
            <li class="paginacion-item">
                <a href="" class="paginacion-link">2</a>
            </li>
            <li class="paginacion-item">
                <a href="" class="paginacion-link">3</a>
            </li>
            <li class="paginacion-item">
                <a href="" class="paginacion-link"> Siguiente </a>
            </li>

        </ul>
    </nav> 


    <!-- Tabla para mostrar los insumos -->
    <section class="tabla-inventario-seccion"> 
        <table class="tabla-inventario">
            <thead>
                <tr>
                    <th> Clave </th>
                    <th> Descripción </th>
                    <th> Categoría </th>
                    <th> Disponible </th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            </tbody>

        </table>
    </section>
</div>

    <!-- Modal -->
    <div class="modal-container">
        <div class="vista-gral">
            <div class="insumo-info">
                <h2> Vista General </h2>

                <span> Clave Del Insumo </span>
                <p id="clave-vista-gral"></p>

                <span>Descripción Del Insumo</span>
                <p id="descripcion-vista-gral"></p>

                <span>Presentación</span>
                <p id="presentacion-vista-gral"></p>

                <span>Categoría</span>
                <p id="categoria-vista-gral"></p>

                <button id="btn-cerrar-vista-gral" class="cancelar"> Cerrar </button>
            </div>


            <div class="existencias-vista-gral">
                <table class="tabla-vista-gral">
                    <thead>
                        <tr>
                            <th> Agosto </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> 
                            <td> Existencia Inicial </td>
                            <td> # </td>
                        </tr>
                        <tr> 
                            <td> Dotación </td>
                            <td> # </td>
                        </tr>
                        <tr> 
                            <td> Dotación Extraordinaria </td>
                            <td> # </td>
                        </tr>
                        <tr> 
                            <td> Dotación Total </td>
                            <td> # </td>
                        </tr>
                        <tr> 
                            <td> Salida Extraordinaria </td>
                            <td> # </td>
                        </tr>
                        <tr> 
                            <td> Disponible </td>
                            <td> # </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- M O D A L  P A R A   E L I M I N A R-->
        <div class="modal-eliminar">
            <h3> Eliminar Insumo </h3>
            <p> ¿Está seguro de eliminar el siguiente registro? </p>
            <div class="table-container">
                <table class="eliminar-table">
                    <thead>
                        <tr>
                            <th> Clave </th>
                            <th> Descripción </th>
                            <th> Categoría </th>
                            <th> Disponible </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <!-- AQUI DEBERIA IR LOS DATOS OBTENIDOS DE LA TABLA -->
                            <td id="clave-eliminar-modal"></td>
                            <td id="descripcion-eliminar-modal"></td>
                            <td id="categoria-eliminar-modal"></td>
                            <td id="disponible-eliminar-modal"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-container">
                <button class="btn-cancelar">
                    <span> Cancelar </span>
                </button>

                <form action="borrarInsumo.php" method="POST">
                    <input type="hidden" name="idInsumo" id="id-insumo-modal" value="">
                    <button type="submit" id="btn-confirmar-eliminar-usuario">
                        <span> Eliminar </span>
                    </button>
                </form>
            </div>
        </div>
    </div>

</main>