<?php
    $ruta = '/phpbbdd/';
    $rutaPHP = $_SERVER['DOCUMENT_ROOT'].$ruta;
    require_once($rutaPHP."config.php");


if (isset($_GET['id'])){

   // header ('Location:listado.php');
}

$consulta = "SELECT * FROM asignaturas WHERE id =".$_GET['id'];
//echo ($consulta);
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
    $apellido1 = $fila['tipo'];
    $apellido2 = $fila['creditos'];
    $fechaNac = $fila['curso'];
  



?>

<article>
    <h2>Editar los datos de una asignatura</h2>

    <form action="actualizar.php" method="post">
        <div class="control">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required
            value="<?=$nombre?>">
        </div>

        <div class="control">
            label for="tipo">Tipo:</label>
            
                <input type="radio" name = "tipo" value="troncal"> Troncal. <?= if($tipo == "troncal"?"checked")>?
                <input type="radio" name = "tipo" value="obligatoria"> Obligatoria.
                <input type="radio" name = "tipo" value="optativa"> Optativa.
            
        </div>

        <div class="control">
            <label for="creditos">Créditos:</label>
            <input type="number" name="creditos" id="creditos" 
            value='<?=$creditos?>'>
        </div>

        <div class="control">
            <label for="curso">Curso:</label>
            <input type="number" name="curso" id="curso"
            value='<?=$curso?>'>

        </div>

        
        <div class="control">
            <input type="submit" value="Editar Asignatura">
        </div>
        <input type="hidden" name="id" value='<?=$id?>'>
    </form>
</article>

<?php
require_once('../plantillas/pie.php');
?>