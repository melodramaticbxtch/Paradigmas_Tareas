<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9 PHP</title>
    </head>
    <body>

        <?php
        echo "<h1>Ejercicio 9: Formulario (Control select)</h1>";
        echo "<p>Consigna: Confeccionar un formulario que solicite el ingreso del nombre de una persona y un control select (en este último permitir la selección de los ingresos mensuales de la persona: 1-1000,1001-3000,>3000) En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si supera 3000) </p>";
        
        if (isset($_REQUEST['enviar'])) {
            // Procesar los datos
            $nombre = $_REQUEST['nombre'];
            $ingresos = $_REQUEST['ingresos']; // Recibe el valor seleccionado
            
            echo "<h2>Resultado</h2>";
            echo "<p>El nombre de la persona es: $nombre.</p>";
            
            // Paga impuestos si supera 3000 corresponde al valor 3 del select.
            if ($ingresos == 3) {
                echo "<p style='color: red; font-weight: bold;'>ARCA te encontró! Según tus ingresos, tenés que pagar impuestos a las ganancias.</p>";
            } else {
                echo "<p style='color: green;'>Según tus ingresos, no tenes que pagar impuestos a las ganancias.</p>";
            }

        } else {
            // Mostrar el Formulario 
            echo "<h2>Formulario de Ingresos</h2>";
            echo '<form method="post" action="">'; 
            
            // Campo para el Nombre
            echo '<label for="nombre">Nombre: </label>';
            echo '<input type="text" id="nombre" name="nombre" required><br><br>';
            
            // Control Select para Ingresos Mensuales
            echo '<label for="ingresos">Seleccione tus ingresos mensuales: </label>';
            echo '<select id="ingresos" name="ingresos">';
            // Opción 1: Menor o igual a 1000
            echo '<option value="1">1 - 1000</option>';
            // Opción 2: Entre 1001 y 3000
            echo '<option value="2">1001 - 3000</option>';
            // Opción 3: Mayor a 3000 (Condición de Impuesto)
            echo '<option value="3">> 3000</option>'; 
            echo '</select><br><br>';
            
            // Botón de Envío
            echo '<input type="submit" name="enviar" value="Verificar Impuesto">';
            echo '</form>';
        }
        ?>
    </body>
</html>