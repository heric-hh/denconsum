<main>
<?php require_once 'vistas/inc/navBarInsumos.php' ?>

<div class="abrir-lote-contenedor">
    <section class="buscar-area">
        <label> Buscar Insumo </label>
        <div class="buscar-input-icon">
            <img src="vistas/img/buscar-input.svg">
            <input type="text" class="buscar-input">
        </div>
    </section>

    <section class="abrir-lote-form-titulo">
        <h2> Abrir Lote </h2>
        
        <form action="" class="abrir-lote-form">
            <div class="form-izquierdo">
                <label> Clave </label>
                <input type="text">

                <label> Descripción </label>
                <input type="text">

                <label> Categoría </label>
                <select name="" id="">
                    <option value=""> --- </option>
                    <option value=""> Cuadro Básico </option>
                    <option value=""> Analgésicos </option>
                    <option value=""> Material De Curación </option>
                </select>

                <label> Número De Lote </label>
                <input type="text">
            </div>

            <div class="form-derecho">
                <label for=""> Fecha De Caducidad </label>
                <input type="text">

                <label for=""> Cantidad </label>
                <input type="text">

                <label for=""> Dotación </label>
                <select name="" id="">
                    <option value=""> Dotación </option>
                    <option value=""> Dotación Extraordinaria </option>
                </select>
                
                <button id="btn-confirmar-abrir-lote" class="confirmar"> 
                    <span> Guardar </span>
                </button>
        </div>

        </form>
    </section>
</div>
</main>