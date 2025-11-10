<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 7: Formulario (control radio)</h1>";
        echo "<p>Consigna: Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio que nos permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios primarios y 3-estudios secundarios. En la página que procesa el formulario mostrar el nombre de la persona y un mensaje indicando el tipo de estudios que posee.</p>";
        
        if (isset($_REQUEST['enviar'])) {
            // Procesar los datos 
            $nombre = $_REQUEST['nombre'];
            $estudios = $_REQUEST['estudios'];
            $mensaje_estudios = "";

            // Determina el mensaje basado en la opción de estudios seleccionada
            if ($estudios == "sin") {
                $mensaje_estudios = "no tiene estudios";
            } elseif ($estudios == "primarios") {
                $mensaje_estudios = "posee estudios primarios";
            } elseif ($estudios == "secundarios") {
                $mensaje_estudios = "posee estudios secundarios";
            } else {
                $mensaje_estudios = "no se pudo determinar el nivel de estudios";
            }
            
            // Mostrar el resultado
            echo "<h2>Resultado</h2>";
            echo "<p>$nombre $mensaje_estudios.</p>";

        } else {
            // Mostrar el Formulario 
            echo "<h2>Formulario de Estudios</h2>";
            echo '<form method="post" action="">'; 
            
            // Campo para el Nombre
            echo '<label for="nombre">Nombre: </label>';
            echo '<input type="text" id="nombre" name="nombre" required><br><br>';
            
            // Controles Radio para Estudios
            echo '<p>Nivel de Estudios: </p>';
            
            // Opción 1: Sin estudios
            echo '<input type="radio" id="sin_estudios" name="estudios" value="sin" checked>';
            echo '<label for="sin_estudios">1- No tiene estudios</label><br>';
            
            // Opción 2: Estudios Primarios
            echo '<input type="radio" id="estudios_primarios" name="estudios" value="primarios">';
            echo '<label for="estudios_primarios">2- Estudios primarios</label><br>';
            
            // Opción 3: Estudios Secundarios
            echo '<input type="radio" id="estudios_secundarios" name="estudios" value="secundarios">';
            echo '<label for="estudios_secundarios">3- Estudios secundarios</label><br><br>';
            
            // Botón de Envío
            echo '<input type="submit" name="enviar" value="Enviar Datos">';
            echo '</form>';
        }
        ?>
    </body>
</html>