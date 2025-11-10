<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 15 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 15: Funciones en PHP</h1>";
        echo "<p>Consigna: Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos oportunidades. En la página que se procesan los datos del formulario implementar una función que imprima un mensaje si las dos claves ingresadas son distintas</p>";
        
        // Definición de la función
        function verificarClavesDistintas($clave1, $clave2) {
            // strcmp() compara dos cadenas de forma sensible a mayúsculas/minúsculas. Retorna 0 si las cadenas son idénticas.
            if (strcmp($clave1, $clave2) !== 0) {
                echo "<p style='color: red; font-weight: bold;'>ERROR: ¡Las dos claves ingresadas son distintas! Vuelva a intentar.</p>";
            } else {
                echo "<p style='color: green;'>Las claves ingresadas coinciden.</p>";
            }
        }
    
        // Formulario de envio
        if (isset($_REQUEST['enviar'])) {

            // Procesamiento de datos
            $nombre_usuario = htmlspecialchars($_REQUEST['nombre']);
            $clave_original = $_REQUEST['clave1'];
            $clave_confirmacion = $_REQUEST['clave2'];
            
            echo "<h2>Resultado de la validación</h2>";
            echo "<p>Usuario: $nombre_usuario</p>";
            
            // Llamada a la función para realizar la validación
            verificarClavesDistintas($clave_original, $clave_confirmacion);
            
        } else {
            // Visualización del formulario
            echo "<h2>Formulario de registro de claves</h2>";
            echo '<form method="post" action="">'; 
            
            // Campo nombre
            echo '<label for="nombre">Nombre de Usuario: </label>';
            echo '<input type="text" id="nombre" name="nombre" required><br><br>';
            
            // Campo clave 1
            echo '<label for="clave1">Ingrese su Clave: </label>';
            // type="password" para ocultar la clave
            echo '<input type="password" id="clave1" name="clave1" required><br><br>';
            
            // Campo clave 2 
            echo '<label for="clave2">Confirme su Clave: </label>';
            echo '<input type="password" id="clave2" name="clave2" required><br><br>';
            
            // Botón de envío
            echo '<input type="submit" name="enviar" value="Registrar">';
            echo '</form>';
        }
        ?>
    </body>
</html>