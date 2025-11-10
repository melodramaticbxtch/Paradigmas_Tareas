<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 13 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 13: Lectura de un archivo de texto.</h1>";
        echo "<p>Consigna: Confeccionar un programa que muestre el archivo de pedido de pizzas via internet del punto anterior. Recordemos que creamos el archivo de texto llamado pedidos.txt (grabar la página php en el mismo directorio donde se encuentra el archivo pedidos.txt) </p>";
        
        $nombre_archivo = "pedidos.txt";

        // Verifica si el archivo existe
        if (file_exists($nombre_archivo)) {
            
            // file_get_contents para leer un archivo completo.
            $contenido = file_get_contents($nombre_archivo);

            echo "<h2>Contenido de pedidos.txt</h2>";
            
            echo '<pre>';
            echo htmlspecialchars($contenido);
            echo '</pre>';

        } else {
            // Mostrar un mensaje de error si el archivo no se encuentra
            echo "<p style='color: red;'>Error: El archivo {$nombre_archivo} no se encontró en el directorio.</p>";
            echo "<p>Asegúrate de haber ejecutado el formulario de pizzas al menos una vez.</p>";
        }

        ?>
    </body>
</html>