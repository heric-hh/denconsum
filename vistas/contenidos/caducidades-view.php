<main>
<?php require_once 'vistas/inc/navBarInsumos.php' ?>

        <div class="inventario-seccion">
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

                <div class="semaforo-caducidades">
                    <div>
                        <img src="vistas/img/rojo-cad.svg">
                        <span class="span-cad"> < 3 M </span>
                    </div>
                    
                    <div>
                        <img src="vistas/img/amarillo-cad.svg">
                        <span class="span-cad"> < 6 M </span>
                    </div>
                    
                    <div>
                        <img src="vistas/img/verde-cad.svg">
                        <span class="span-cad"> > 6 M </span>
                    </div>
                </div>
            </section>

            <!-- Tabla de caducidades -->
            <section class="tabla-inventario-seccion"> 
                <table class="tabla-inventario">
                    <thead>
                        <tr>
                            <th> Clave </th>
                            <th> Descripción </th>
                            <th> Categoría </th>
                            <th> Lote </th>
                            <th> Cantidad </th>
                            <th> Caducidad </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr></tr>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
