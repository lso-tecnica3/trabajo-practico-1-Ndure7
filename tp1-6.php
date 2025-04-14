<!DOCTYPE html>
<html>
<head>
    <title>TP1 - Ejercicio 6</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php
            // Primera fila: listas de 1 a 50 divididas en 5 columnas
            for ($columna = 0; $columna < 5; $columna++) {
                print "<td><ul>";
                // Este for genera 10 elementos, del 1 al 10, dentro del for se generan los numeros para cada columna
                for ($x = 1; $x <= 10; $x++) {
                    $numero = $columna * 10 + $x;
                    print "<li>$numero</li>";
                }
                print "</ul></td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            // Segunda fila: numeros del 100 al 51 divididos en 5 columnas
            $contador = 100;
            for ($columna = 0; $columna < 5; $columna++) {
                print "<td><ol>";
                // Este for muestra los 10 elementos numericos en orden descendente desde 100 hasta 51, uno por uno
                for ($x = 1; $x <= 10; $x++) {
                    print "<li>$contador</li>";
                    $contador = $contador - 1;
                }
                
                print "</ol></td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>
