<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 12: Creación de un archivo de texto</h1>";
        echo "<p>Consigna: Confeccionar un programa en PHP que permita hacer el pedido de pizzas via internet.</p>";
        
        if (isset($_REQUEST['confirmar'])) {
        // Procesar los datos y guardar en archivo
        
        // Recoger datos generales
        $nombre = htmlspecialchars($_REQUEST['nombre']);
        $direccion = htmlspecialchars($_REQUEST['direccion']);
        
        // Guardar datos de pizzas
        $detalle_pedido = "";
        
        // Verificar si se seleccionó jamón y queso
        if (isset($_REQUEST['jq'])) {
            $cantidad_jq = intval($_REQUEST['cantidad_jq']); // Intval para asegurar que es un número
            if ($cantidad_jq > 0) {
                $detalle_pedido .= "- Jamón y Queso: {$cantidad_jq} unidades\n";
            }
        }

        // Verificar si se seleccionó napolitana
        if (isset($_REQUEST['napolitana'])) {
            $cantidad_nap = intval($_REQUEST['cantidad_nap']);
            if ($cantidad_nap > 0) {
                $detalle_pedido .= "- Napolitana: {$cantidad_nap} unidades\n";
            }
        }
        
        // Verificar si se seleccionó muzzarella
        if (isset($_REQUEST['muzzarella'])) {
            $cantidad_muz = intval($_REQUEST['cantidad_muz']);
            if ($cantidad_muz > 0) {
                $detalle_pedido .= "- Muzzarella: {$cantidad_muz} unidades\n";
            }
        }

        // 3. Formato pedido 
        $texto_a_grabar = "========================================================\n"
                        . "PEDIDO REALIZADO: \n"
                        . "Nombre : {$nombre}\n"
                        . "Dirección : {$direccion}\n"
                        . "Detalle: \n"
                        . (empty($detalle_pedido) ? "- No se seleccionaron pizzas.\n" : $detalle_pedido)
                        . "========================================================\n\n";

        // Escribir en el archivo "pedidos.txt"
        if (!empty($detalle_pedido)) {
            if (file_put_contents('pedidos.txt', $texto_a_grabar, FILE_APPEND | LOCK_EX) !== false) {
                echo "<h2>¡Pedido Confirmado!</h2>";
                echo "<p style='color: green;'>Pedido confirmado!</p>";
                echo "<pre>{$texto_a_grabar}</pre>"; 
            } else {
                echo "<h2>Error al Guardar</h2>";
                echo "<p style='color: red;'>Hubo un error al intentar guardar el pedido.</p>";
            }
        } else {
            echo "<h2>Error en el Pedido</h2>";
            echo "<p style='color: orange;'>Debe seleccionar y especificar la cantidad de al menos un tipo de pizza.</p>";
        }

        } else {
            //Mostrar el Formulario 
            echo "<h2>Hacer Pedido</h2>";
            echo '<form method="post" action="">'; 
            
            // Nombre
            echo '<label for="nombre">Nombre: </label>';
            echo '<input type="text" id="nombre" name="nombre" required><br><br>';
            
            // Dirección
            echo '<label for="direccion">Dirección: </label>';
            echo '<input type="text" id="direccion" name="direccion" required><br><br>';
            
            echo '<h3>Seleccione las pizzas:</h3>';

            // Pizza jamón y queso
            echo '<input type="checkbox" id="jq" name="jq" value="si">';
            echo '<label for="jq">Jamón y queso:</label>';
            echo ' Cantidad: <input type="text" name="cantidad_jq" size="3" value="0"><br>';
            
            // Pizza napolitana
            echo '<input type="checkbox" id="napolitana" name="napolitana" value="si">';
            echo '<label for="napolitana">Napolitana:</label>';
            echo ' Cantidad: <input type="text" name="cantidad_nap" size="3" value="0"><br>';
            
            // Pizza muzzarella
            echo '<input type="checkbox" id="muzzarella" name="muzzarella" value="si">';
            echo '<label for="muzzarella">Muzzarella:</label>';
            echo ' Cantidad: <input type="text" name="cantidad_muz" size="3" value="0"><br><br>';
            
            // Botón de envío
            echo '<input type="submit" name="confirmar" value="Confirmar">';
            echo '</form>';
        }
        ?>
    </body>
</html>