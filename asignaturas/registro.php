<?php
require_once('../plantillas/cabecera.php');
?>

<article>
    <h2>introducir datos asignatura</h2>

    <form action="insertar.php" method="post">
        <div class="control">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div class="control">
            <label for="tipo">Tipo:</label>
            
                <input type="radio" name = "tipo" value="troncal" checked> Troncal.
                <input type="radio" name = "tipo" value="obligatoria"> Obligatoria.
                <input type="radio" name = "tipo" value="optativa"> Optativa.
             
          

        </div>

        <div class="control">
            <label for="creditos">Creditos:</label>
            <input type="number" name="creditos" id="creditos" value ="6" step="0.5" max ="15">
        </div>

        <div class="control">
            <label for="curso">Curso:</label>
            <input type="number" name="curso" id="curso">
        </div>

    
        <div class="control">
            <input type="submit" value="Añadir Asignatura">
        </div>

    </form>
</article>

<?php
require_once('../plantillas/pie.php');
?>