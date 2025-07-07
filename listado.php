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
        if (isset($_POST['filtrar'])){

            echo "vengo de POST";
            $nomApe = $_POST['nomApe'];

            $consulta="SELECT * FROM alumnos WHERE CONCAT(nombre, ' ', apellido1, ' ', apellido2)
            like '%".nomAoe."%'";
        }

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
    ?>
    </div>

    <!-- Formulario para filtrado de la tabla
       Este formulario enlaza con la propia pagina, de tal manera que si
       se llega desde el formulario -> queremos filtrar informacion, pero-->
    <h2> Buscar: </h2>
    <form action="listado.php" method="post">
            <label for= "nomape">Nombre y Apellidos: </label>
            <input type = "text" name= "nomApe" id= "nomApe">


<?php            require_once('plantillas/pie.php'); ?>