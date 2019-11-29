     <div class="container">
    <div class="row">
        <div class="col">
            <form action="iniciarSesion" method="post">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <input type="submit" class="btn btn-primary" value="Ingresar">
            </form>

            <form action="mostrarOlvideContraseña" method="post">
                <input type="submit" class="btn btn-primary" value="¿Has olvidado la contraseña?">
            </form>
        </div>
        <div class="col">
            <form action="registroUsuario" method="post">
                <input type="text" name="mail" placeholder="Mail">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <input type="submit" class="btn btn-primary" value="Registrarse">
            </form>
        </div>
    </div>
</div>