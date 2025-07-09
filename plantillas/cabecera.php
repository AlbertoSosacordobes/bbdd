<?php 
// Varoables con la rutas tanto de HTML como de PHP. En PHP debe ir desde el documnet root y en HTML desde la ruta de inicio del sitio web
$ruta = '/phpbbdd/';
$rutaPHP = $_SERVER['DOCUMENT_ROOT'].$ruta;
// echo $_SERVER['DOCUMENT_ROOT'].$ruta;

// incluimos la conexión a la base de datos
require_once($rutaPHP."config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de alumnos - Séneca</title>
    <link rel="stylesheet" href="<?=$ruta?>css/estilos.css">
</head>
<body>
    <header>
        <h1>Gestion de alumnos - Séneca</h1>
        <nav>
            <ul>
                <li><a href="<?=$ruta?>index.php">Inicio</a></li>
                <li><a href="<?=$ruta?>listado.php">Mostrar alumnos</a></li>
                <li><a href="<?=$ruta?>registro.php">Insertar Alumnos</a></li>
                 <li><a href="<?=$ruta?>asignaturas/listado.php">Mostrar Asignaturas</a></li>
                 <li><a href="<?=$ruta?>asignaturas/registro.php">Insertar Asignaturas</a></li>
               
            </ul>
        </nav>
    </header>
    <main>