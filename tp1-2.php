<!DOCTYPE html>
<html> 
<head>
    <title>  TP1 - Ejercicio 2 </title>
</head>
<body> 
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<?php
// Bucle externo para recorrer las filas (de 1 a 8)
for($fila=1; $fila<=8; $fila++)
{
    echo "<tr>"; 
    
    // Bucle interno para recorrer las columnas (de 1 a 8)
    for($col=1; $col<=8; $col++)
    {
        
        $total = $fila + $col;
        
        // Si la suma es par, el fondo de la celda será blanco
        if($total % 2 == 0)
        {
            
            print "<td height='30px' width='30px' bgcolor='#FFFFFF'></td>";
        }
        else // Si la suma es impar, el fondo de la celda será negro
        {
           
            print "<td height='30px' width='30px' bgcolor='#000000'></td>";
        }
    }
    
    print "</tr>";
}
?>
</table>
</body>
</html>
