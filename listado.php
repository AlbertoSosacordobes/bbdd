<?php  require_once('plantillas/cabecera.php'); ?>

<article>
    <table>
        <thead>
            <tr>
            <th>ID:</th>    
            <th>Nombre: </th>
            <th>Apellido1: </th>
            <th>apellido2: </th>
            <th>Fecha de Nacimiento: </th>
            <th>Correo Electronico: </th>
            </tr>
        </thead>
    </table>
    <tbody>
  <?php
        $consulta = "SELECT * FROM alumnos";
        //ejecuta la consulta y devuelve un array con todas las
        //filas resultantes
        $filas = mysqli_query ($conexion, $consulta);

        // iterar las filas de la tabla

        while($fila = mysqli_fetch_array($filas)){
                echo "<tr>\n";
                echo "<td> ".$fila['id']." </td>\n";
                echo "<td> ".$fila['nombre']." </td>\n";
                echo "<td> ".$fila['apellido1']." </td>\n";
                echo "<td> ".$fila['apellido2']." </td>\n";
                echo "<td> ".$fila['fecha_nac']." </td>\n";
                echo "<td> ".$fila['email']." </td>\n";
                echo "</tr>\n";
        }
    ?>