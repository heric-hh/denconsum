<main>
    <?php require_once 'vistas/inc/navBarInsumos.php' ?>
    
        <h2 class="titulos-cr-up"> Registrar Nuevo Insumo </h2>

        <form action="">
            <div class="forms-contenedor">
                <div class="form-izquierdo">
                    <label for="clave"> Clave </label>
                    <input type="text" id="clave" required placeholder="000.000.0000"> 
                        
                    <label for="descripcion"> Descripción </label>
                    <input type="text" id="descripcion" required placeholder="Amalgama dental polvo de aleacion...">

                    <label for="categoria"> Categoría </label>
                    <select name="categoria" id="categoria">
                        <option value=""> Cuadro Básico </option>
                        <option value=""> Analgésicos </option>
                        <option value=""> Material De Curación </option>
                    </select>
                    
                    <label for="presentacion"> Presentación </label>
                    <input type="text" id="presentacion" >

                </div>
                <div class="form-derecho">      
                    <label for="piezas"> Piezas </label>
                    <input type="text" id="piezas" required placeholder="10">

                    <label for="descPresentacion"> Descripción de presentación </label>
                    <input type="text" id="descPresentacion" required placeholder="Cáspulas de 400mg">

                    <label for="cdgoBarras"> Código de Barras </label>
                    <input type="text" id="cdgoBarras" required >

                    <button id="btn-guardar-registrar-insumo" class="confirmar">
                        <span> Guardar </span>
                    </button>
                </div>
            </div>
        </form>
</main>