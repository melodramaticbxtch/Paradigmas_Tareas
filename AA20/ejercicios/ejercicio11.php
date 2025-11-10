<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 11 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 11: Vectores (tradicionales)</h1>";
        echo "<p>Consigna: Definir un vector con los nombres de los días de la semana. Luego imprimir el primero y el último elemento del vector.</p>";
    
        // Vector 
        $dias_semana = array(
            "Lunes", 
            "Martes", 
            "Miércoles", 
            "Jueves", 
            "Viernes", 
            "Sábado", 
            "Domingo"
        );

        echo "<h2>Contenido del vector: " . implode(", ", $dias_semana) . "</h2>";

        // Imprimir el primer elementO
        $primer_dia = $dias_semana[0];

        echo "<h2>Primer Elemento</h2>";
        echo "<p>El primer día de la semana es: $primer_dia</p>";

        // Imprimir el último elemento
        $ultimo_indice = count($dias_semana) - 1;
        $ultimo_dia = $dias_semana[$ultimo_indice];

        echo "<h2>Último Elemento</h2>";
        echo "<p>El último día de la semana es: $ultimo_dia</p>";
        ?>
    </body>
</html>