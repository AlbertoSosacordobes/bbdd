<?php
require_once('plantillas/cabecera.php');
?>

<article>
    <h2>Inscribir un alumno</h2>

    <form action="insertar.php" method="post">
        <div class="control">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div class="control">
            <label for="apellido1">Apellido1:</label>
            <input type="text" name="apellido1" id="apellido1" required>
        </div>

        <div class="control">
            <label for="apellido2">Apellido2:</label>
            <input type="text" name="apellido2" id="apellido2">
        </div>

        <div class="control">
            <label for="fechanac">Fecha Nacimiento:</label>
            <input type="date" name="fechanac" id="fechanac">
        </div>

        <div class="control">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="control">
            <input type="submit" value="Añadir Alumno">
        </div>

    </form>
</article>

<?php
require_once('plantillas/pie.php');
?>