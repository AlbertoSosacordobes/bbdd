<?php

    $ruta = '/phpbbdd/';
    $rutaPHP = $_SERVER['DOCUMENT_ROOT'].$ruta;
    require_once($rutaPHP."config.php");

    if(!$_GET['id']){

        header('location:listado.php');
        
    }
    //define una variable de sesion llamada mensaje para enviar datos
    //a otra pagina
    $_SESSION ['mensaje']="";


    //recogemos el id del alumno a eliminar 
    $id = $_GET['id'];

    $consulta="DELETE FROM asignaturas Where id=$id";
    
    $resultado = mysqli_query($conexion, $consulta);
    $numFilas=mysqli_affected_rows($conexion);
    if ($numFilas==1){
        $_SESSION["mensaje"]="AlumnoAsignatura borrada correctamente.Se ha borrado $nunFilas filas";
    }else {
        $_S["mensaje"]= "Error. No se ha podido borrar.".$numFilas;
    }

    header("Location:listado.php");
