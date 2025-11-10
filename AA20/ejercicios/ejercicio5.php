<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <tittle>Ejercicio 4</tittle>
    </head>
    <body>
        <h1>Condicional if</h1>
  
         <?php

        echo "<h2>For loop:</h2>";
        for ($i = 2; $i <= 100; $i += 2) {
            echo "<p>$i</p>";
        }
        echo "<h2>While loop:</h2>";
        $i = 2;
        while ($i <= 100) {
            echo "<p>$i</p>";
            $i += 2;
        }
        echo "<h2>Do-While loop:</h2>";
        $i = 2;
        do {
            echo "<p>$i</p>";
            $i += 2;
        } while ($i <= 100);
        ?>

    </body>
</html>