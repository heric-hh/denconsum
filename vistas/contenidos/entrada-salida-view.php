<main>
    <?php require_once 'vistas/inc/navBarInsumos.php' ?>

    <div class="entrada-salida-area">
        <div class="btns-entradas">
            <button id="btn-nueva-entrada" class="confirmar"> Nueva Entrada </button>
            <button id="btn-nueva-salida" class="eliminar"> Nueva Salida </button>
        </div>

        <seccion class="entrada-salida-busqueda-form">
        <h2> Nueva Entrada </h2>
            <div class="buscar-area">
                <label> Buscar Insumo </label>
                <div class="buscar-input-icon">
                    <img src="vistas/img/buscar-input.svg">
                    <input type="text" class="buscar-input">
                </div>
            </div>
            <form action="" class="entrada-salida-form">
               <div class="form-izquierdo">
                    <label> Clave </label>
                    <input type="text">

                    <label> Descripción </label>
                    <input type="text">

                    <label> Categoría </label>
                    <input type="text">

                    <label> Lote </label>
                    <input type="text">
               </div>

               <div class="form-derecho">
                <label for=""> Caducidad </label>
                    <input type="text">

                    <label for=""> Cantidad </label>
                    <input type="text">

                    <label for=""> Tipo </label>
                    <input type="text">

                    <label for=""> Fecha </label>
                    <input type="text">
                    
                    <button id="btn-guardar-entrada" class="confirmar"> 
                        <span> Guardar </span>
                    </button>
               </div>
                
            </form>
        </seccion>
    </div>
</main>