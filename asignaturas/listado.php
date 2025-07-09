
<?php   require_once('../plantillas/cabecera.php');
?>
<article>
    <h2>Listado de asignaturas.</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>tipo</th>
                <th>Créditos</th>
                <th>Curso</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
       
       <?php 
            if (isset($_POST['filtrar'])) {
                echo "vengo de POST";
                $nomAsig = $_POST['nomAsig'];



                $consulta="SELECT * FROM asignaturas WHERE nombre like '%".$nomAsig."%'";
            } else {
                echo("vengo de menú");
                $consulta ="SELECT * FROM asignaturas";
            }
            

            // Ejecuta la consulta y devuelve un array con todas las 
            // filas resultantes
            $filas = mysqli_query($conexion, $consulta);

            // iterar las filas de la tabla
            while(($fila = mysqli_fetch_array($filas))==true){
                echo "<tr>\n";
                echo "<td> ".$fila['id']." </td>\n";
                echo "<td> ".$fila['nombre']." </td>\n";
                echo "<td> ".$fila['tipo']." </td>\n";
                echo "<td> ".$fila['creditos']." </td>\n";
                echo "<td> ".$fila['curso']. " </td>\n";
                echo "<td><a href='editar.php?id=".$fila['id']."'>Editar</a></td>\n";
                echo "<td><a href='borrado.php?id=".$fila['id']."'>Eliminar</a></td>\n";
                echo "</tr>\n";
                
            }

        ?>     
        </tbody>
    </table>
    <div class="mensaje">
        <?php 
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
            ?>
    </div>
    <div class="mensaje">
        <?php 
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
            ?>
    </div>

        <!-- Formulario para filtrar la informacion de la tabla
         Este foormulario enlaza con la propia página, de tal manera que si se llega desde el formulario -> queremos filtrar información, pero si no se llega por POST queremos mostrar todos los datos. -->
    <h2>Buscar:</h2>
    <form action="listado.php" method="post">
        <label for="nomAsig">Filtrar por asignatura: </label>
        <input type="text" name="nomAsig" id="nomAsig">

        <input type="submit" name='filtrar' value="Filtrar">
        <a href="listado.php">Limpiar filtro</a>
    </form>
    


</article>

<?php   require_once('../plantillas/pie.php'); ?>