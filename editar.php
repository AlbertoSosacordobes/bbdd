<?php
require_once('plantillas/cabecera.php');

if (isset($_GET['id'])){

   // header ('Location:listado.php');
}

$consulta = "SELECT * FROM alumnos WHERE id =".$_GET['id'];
echo ($consulta);
$resultado = mysqli_query($conexion, $consulta);
//comprobamos el numero de filas
if(mysqli_num_rows($resultado)==0){

    //no haya ningun alumno con ese codigo
    $_SESSION['mensaje']= 'No se puede editar. No existe ningun alumno 
    con el id '.$_GET['id'];
    header ('Location:listado.php');
}
    //recuperamos los datos del alumno a modificar
    $fila = mysqli_fetch_array($resultado);
    $id = $fila['id'];
    $nombre = $fila['nombre'];
    $apellido1 = $fila['apellido1'];
    $apellido2 = $fila['apellido2'];
    $fechaNac = $fila['fecha_nac'];
    $email = $fila['email'];



?>

<article>
    <h2>Editar los datos de un alumno</h2>

    <form action="actualizar.php" method="post">
        <div class="control">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required
            value='<?=$nombre?>'>
        </div>

        <div class="control">
            <label for="apellido1">Apellido1:</label>
            <input type="text" name="apellido1" id="apellido1" required
            value='<?=$apellido1?>'>
        </div>

        <div class="control">
            <label for="apellido2">Apellido2:</label>
            <input type="text" name="apellido2" id="apellido2" 
            value='<?=$apellido2?>'>
        </div>

        <div class="control">
            <label for="fechanac">Fecha Nacimiento:</label>
            <input type="date" name="fechanac" id="fechanac"
            value='<?=$fechaNac?>'>

        </div>

        <div class="control">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email"
            value='<?=$email?>'>
        </div>
        <div class="control">
            <input type="submit" value="Editar Alumno">
        </div>
        <input type="hidden" name="id" value='<?=$id?>'>
    </form>
</article>

<?php
require_once('plantillas/pie.php');
?>