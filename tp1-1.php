<!DOCTYPE html>
<html>
<head>
    <title>  TP1 - Ejercicio 1 </title>
    <style>
        table {
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            width: 40px;
            height: 40px;
        }
        th {
            background-color: #a9dce3;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>X</th>
            <?php
            // Este for genera los encabezados de columna (del 1 al 10)
            for ($x = 1; $x <= 10; $x++) {
                print "<th>$x</th>";
            }
            ?>
        </tr>
        <?php
        // Este for genera cada fila de la tabla de multiplicar (del 1 al 10)
        for ($x = 1; $x <= 10; $x++) {
            print "<tr>";
            print "<th>$x</th>";

            // Este for genera las celdas con los productos de la tabla del número $x
            for ($y = 1; $y <= 10; $y++) {
                print "<td>" . ($x * $y) . "</td>";
            }

            print "</tr>";
        }
        ?>
    </table>
</body>
</html>
