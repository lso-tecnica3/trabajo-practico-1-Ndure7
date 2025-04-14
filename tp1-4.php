<!DOCTYPE html>
<html>
<head>
    <title>TP1 - Ejercicio 4</title>
</head>
<body>

<table border="1" cellpadding="5" cellspacing="0">
<?php
// Recorremos los números del 1 al 50
for ($x = 1; $x <= 50; $x++) {
    print "<tr>";
    print "<td>$x</td>";

    if ($x % 3 == 0 and $x % 5 == 0) {
        print "<td>FizzBuzz</td>";
    } elseif ($x % 3 == 0) {
        print "<td>Fizz</td>";
    } elseif ($x % 5 == 0) {
        print "<td>Buzz</td>";
    } else {
        print "<td></td>"; 
    }

    print "</tr>";
}
?>
</table>

</body>
</html>
