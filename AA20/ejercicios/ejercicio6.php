<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6 PHP</title>
    </head>
    <body>
        <?php
        $nombre = $_POST['nombre'];
        $edad = (int)$_POST['edad']; 

        echo "<p>El nombre ingresado es: <strong>" . htmlspecialchars($nombre) . "</strong></p>";
        echo "<p>La edad ingresada es: <strong>" . $edad . "</strong> años.</p>";
        echo "<hr>";
        
        if ($edad >= 18) {
            echo "<p class='mayor'>$nombre, sos mayor de edad.</p>";
        } else {
            echo "<p class='menor'>$nombre, sos eres menor de edad.</p>";
        }

        ?>
    </body>
</html>