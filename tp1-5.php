<!DOCTYPE html>
<html>
<head>
    <title>TP1 - Ejercicio 5</title>
</head>
<body>

<table border="0" cellspacing="0" cellpadding="0">
<?php
// Tabla de 20 x 20 (filas)
for ($fila = 0; $fila < 20; $fila++) {
    print "<tr>";
    // Tabla de 20 x 20 (columnas)
    for ($col = 0; $col < 20; $col++) {
        if ($fila == $col) {
            $color = "#00FF00"; 
        } elseif ($fila > $col) {
            $color = "#FF0000"; 
        } else {
            $color = "#0000FF"; 
        }

        print "<td height='20px' width='20px' bgcolor= '$color'></td>";
    }
    print "</tr>";
}
?>
</table>

</body>
</html>
