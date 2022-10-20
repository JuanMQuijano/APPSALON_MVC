<h1 class="nombre-pagina">Olvidé Password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>
<form action="/olvide" method="post" class="formulario">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea un</a>
</div>