<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 8: Formulario (control checkbox)</h1>";
        echo "<p>Consigna: Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de deportes que practica (futbol, basket, tennis, voley) Mostrar en la página que procesa el formulario la cantidad de deportes que practica </p>";
        
        if (isset($_REQUEST['enviar'])) {
            // Procesar los Datos ==
            $nombre = $_REQUEST['nombre'];
            
            // Los checkboxes se reciben como el array deportes si fueron seleccionados
            // Si el usuario no seleccionó ningún deporte, $_REQUEST['deportes'] no existe.
            if (isset($_REQUEST['deportes'])) {
                $deportes_seleccionados = $_REQUEST['deportes'];
                $cantidad_deportes = count($deportes_seleccionados);
            } else {
                $cantidad_deportes = 0;
            }
            
            // Resultado
            echo "<h2>Resultado</h2>";
            echo "<p>El nombre de la persona es: $nombre.</p>";
            echo "<p>La persona practica $cantidad_deportes deportes.</p>";

        } else {
            // Mostrar el Formulario ==
            echo "<h2>Formulario de Deportes</h2>";
            echo '<form method="post" action="">'; 
            
            // Campo para el Nombre
            echo '<label for="nombre">Nombre: </label>';
            echo '<input type="text" id="nombre" name="nombre" required><br><br>';
            
            // Controles Checkbox para Deportes
            echo '<p>Seleccione los deportes que practica:</p>';
            
            // Utiliza name="deportes[]" para que PHP lo reciba como un array
            
            // Checkbox: Fútbol
            echo '<input type="checkbox" id="futbol" name="deportes[]" value="futbol">';
            echo '<label for="futbol">Fútbol</label><br>';
            
            // Checkbox: Básquet
            echo '<input type="checkbox" id="basket" name="deportes[]" value="basket">';
            echo '<label for="basket">Básquet</label><br>';
            
            // Checkbox: Tenis
            echo '<input type="checkbox" id="tennis" name="deportes[]" value="tennis">';
            echo '<label for="tennis">Tenis</label><br>';
            
            // Checkbox: Vóley
            echo '<input type="checkbox" id="voley" name="deportes[]" value="voley">';
            echo '<label for="voley">Vóley</label><br><br>';
            
            // Botón de Envío
            echo '<input type="submit" name="enviar" value="Contar Deportes">';
            echo '</form>';
        }
        ?>
    </body>
</html>