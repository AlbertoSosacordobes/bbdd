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
            <th>Modificar</th>
            <th>Borrar</th>
            </tr>
        </thead>

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
                echo "<td><a href='editar.php?id=".$fila['id']."'> Editar </a></td>\n"; // hacer boton de editar
                echo "<td><a href='borrado.php?id=".$fila['id']."'> Eliminar </a></td>\n"; //hacer borrado de unidad.
                echo "</tr>\n";
        }
    ?>
    </tbody>
    </table>
    <div class="mensaje">
        <?php
            if(isset($_SESSION['mensaje'])){
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);

            }  
    


 require_once('plantillas/pie.php'); ?>