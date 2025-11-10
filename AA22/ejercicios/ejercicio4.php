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
            $num = rand() % 3 + 1;
            echo "El numero generado es: ";
            switch ($num) {
                case 1:
                    echo "uno";
                    break;
                case 2:
                    echo "dos";
                    break;
                case 3:
                    echo "tres";
                    break;
            }
            echo "<br>";
            ?>

    </body>
</html>