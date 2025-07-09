<?php

if (!isset($_POST['nombre'])) {
    // Mueve el navegador hasta otra página si no se llegadesde el formulario
    header('Location:registro.php');
}

    require_once('../plantillas/cabecera.php');
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $creditos = $_POST['creditos'];
    $curso = $_POST['curso'];
  
    // controles sobre los valores o validaciones
    ?>

    <h2>Alumno a insertar</h2>
    <ul>
        <li>Nombre: <?=$nombre?></li>
        <li>Tipo: <?=$tipo?></li>
        <li>Créditos:<?=$creditos?></li>
        <li>Curso: <?=$curso?></li>
    </ul>

    <?php 
        $consulta = 
            "insert into asignaturas (nombre,tipo,creditos,curso) 
            values('$nombre','$tipo', $creditos, $curso)\n ";

           // echo $consulta;

           // ejecutamos la consulta
           $resultado = mysqli_query($conexion, $consulta);
           if ($resultado>0) {
                echo '<p>Se ha insertado la asignatura satisfactoriamente</p>';
           } else {
                echo "<p class='error'> Error al insertar la asignatura </p>";
           }
?>



<?php require_once('../plantillas/pie.php'); ?>