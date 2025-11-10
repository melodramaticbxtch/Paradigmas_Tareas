<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 10: Formulario (Control textarea)</h1>";
        echo "<p>Consigna: Confeccionar una página que muestre un contrato dentro de un textarea, disponer puntos suspensivos donde el operador debe ingresar un texto. La página que procesa el formulario sólo debe mostrar el contrato con las modificaciones que hizo el operador.</p>";
        
        if (isset($_REQUEST['enviar'])) {
            // Procesar los datos
            $contrato_modificado = $_REQUEST['contrato'];
            
            echo "<h2>Contrato Modificado</h2>";
            echo "<p>El operador ha completado el contrato con las siguientes modificaciones:</p>";

            echo '<div style="border: 1px solid #ccc; padding: 15px; background-color: #f9f9f9; white-space: pre-wrap;">';
            echo nl2br(htmlspecialchars($contrato_modificado));
            echo '</div>';
            
        } else {
            // Mostrar el Formulario
            
            $contrato_base = "En la ciudad de [....................], se acuerda entre la Empresa [....................]\r\n"
                            . "representada por el Sr. [....................] en su carácter de Apoderado,\r\n"
                            . "con domicilio en la calle [....................] y el Sr. [....................],\r\n"
                            . "futuro empleado con domicilio en [....................], celebrar el presente\r\n"
                            . "contrato a Plazo Fijo, de acuerdo a la normativa vigente de los\r\n"
                            . "artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.";
            
            echo "<h2>Formulario de Contrato</h2>";
            echo '<form method="post" action="">'; 
            
            echo '<p>Complete los campos del contrato (los puntos suspensivos): </p>';
            
            // Control Textarea: Se carga con el contrato base como valor por defecto
            echo '<textarea name="contrato" rows="10" cols="80" style="font-family: monospace;">';
            // htmlspecialchars para escapar caracteres especiales si existieran
            echo htmlspecialchars($contrato_base); 
            echo '</textarea><br><br>';
            
            // Botón de Envío
            echo '<input type="submit" name="enviar" value="Procesar Contrato">';
            echo '</form>';
        }
        ?>
    </body>
</html>