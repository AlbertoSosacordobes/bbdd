<?php

       $ruta = '/phpbbdd/';
    $rutaPHP = $_SERVER['DOCUMENT_ROOT'].$ruta;
    require_once($rutaPHP."config.php");
 // conectar a la bd
print_r($_POST);
        //redirigimos añ ñostadp so mp se llega a pagina desde el formulario
        if (!isset($_POST['id']) || !isset($_POST['nombre'])){

            header('Location: listado.php'); //deja de analizar la pagina y se redirige
        }
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido1= $_POST['tipo'];
        $apellido2= $_POST['creditos'];
        $fechaNac= $_POST['curso'];
     
        
        $consulta = "UPDATE alumnos SET nombre=?, tipo=?, creditos=?, curso=? where id =?";
        // utilizamos una consulta preparada
        echo ($consulta);

    $preparada= mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($preparada, 'ssdii', $nombre, $tipo, $creditos, 
    $curso, $id);

        //ejecutamos la consulta prepatada
        mysqli_stmt_execute($preparada);
    if (mysqli_affected_rows($conexion)==1){
        //hemos conseguido modificar el registro, redirigimos al listado
        header('Location: listado.php');


    }else {

        //redifirimos al fortmulario de edicion del alumno
        header('Location: editar.php?id='.$id);
    }

?>