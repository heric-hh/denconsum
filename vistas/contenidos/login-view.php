<div class="login-container">
    <div class="diseño">
        <img src="vistas/img/loginDentista.jpg" alt="">
    </div>

    <div class="formulario">
        <h1> Bienvenido </h1>
        <h2> Por favor, ingrese sus datos. </h2>

        <form action="" method="POST" autocomplete="off">
            <label for="usuario"> Usuario </label>
            <input type="text" name="usuario_log" maxlength="20" autofocus required >

            <label for="pass"> Contraseña </label>
            <input type="password" name="contra_log" maxlength="20" required>

            <button type="submit" class="confirmar"> Ingresar </button>
        </form>
    </div>
</div>

<?php 
    if ( isset( $_POST['usuario_log'] ) && isset( $_POST['contra_log'] )  ) {
        require_once 'controladores/loginControlador.php';
        $insLogin = new loginControlador();
        echo $insLogin->iniciarSesionControlador();
    }
?>