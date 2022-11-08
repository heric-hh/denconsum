<main>
        <section class="agregar-usuario-seccion">
            <h2> Agregar Usuario </h2>
            <form action="<?php echo SERVER_URL?>ajax/usuarioAjax.php" method="POST" data-form="save" class="agregar-usuario-form formularioAjax">
                <div class="form-izquierdo">
                    <label> Nombre </label>
                    <input type="text" name="usuarioNombre_reg" required placeholder="Susana" id="nombre-agregar-usuario" maxlength="30">
                    
                    <label> Apellido Paterno </label>
                    <input type="text" name="usuarioApePat_reg" required placeholder="Montiel" id="apePat-agregar-usuario" maxlength="30">

                    <label> Apellido Materno </label>
                    <input type="text" name="usuarioApeMat_reg" required placeholder="Fuentes" id="apeMat-agregar-usuario" maxlength="30">

                    <label> Rol </label>
                    <select name="usuarioRol_reg">
                        <option value="1"> Administrador </option>
                        <option value="2"> Operativo </option>
                        <option value="3"> Visitante </option>
                    </select>
                </div>

                <div class="form-derecho">
                    <label> Usuario </label>
                    <input type="text" name="usuarioUsuario_reg" required placeholder="josumf" id="usuario-agregar-usuario" maxlength="30">

                    <label> Contraseña </label>
                    <input type="password" name="usuarioPassword_reg" required id="passw1" maxlength="30">

                    <label> Confirmar Contraseña </label>
                    <input type="password" name="usuarioPassword2_reg" required id="passw2" maxlength="30">

                    <button type="submit" id="btn-guardar-agregar-usuario" name="guardar" class="confirmar">
                        <span> Guardar </span>
                    </button>
                </div>
            </form>
        </section>
    </main>