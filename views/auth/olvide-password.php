<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<?php include_once __DIR__ . "/../templates/alertas.php";  ?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" placeholder="Tu Email" id="email" name="email">
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">Ya tienes una cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">Aún no tienes una cuenta? Crear una</a>
</div>