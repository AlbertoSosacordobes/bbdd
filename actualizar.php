<?php

        require_once('config.php'); // conectar a la bd

        //redirigimos añ ñostadp so mp se llega a pagina desde el formulario
        if (isset($_POST['id']) || !isset($_POST['nombre'])){

            header('Location: listado.php'); //deja de analizar la pagina y se redirige

        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido1= $_POST['apellido1'];
        $apellido2= $_POST['apellido2'];
        $fechaNac= $_POST['fecha_nac'];
        $email= $_POST['email'];
        }
        $consulta = "UPDATE alumnos SET nombre=?, apellido1=?, apellido2=?, fecha_nac=?, email=?
        where id =?";
        // utilizamos una consulta preparada

    $preparada= mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($preparada, 'sssssi', $nombre, $apellido1, $apellido2, 
    $fechaNac, $email, $id);

        //ejecutamos la consulta prepatada
        mysqli_stmt_execute($preparada);
    if (mysql_affected_rows($conexion)==1){
        //hemos conseguido modificar el registro, redirigimos al listado
        header('Location: listado.php');


    }else {

        //redifirimos al fortmulario de edicion del alumno
        header('Location: editar.php?id='.id);
    }

?>