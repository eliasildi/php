<?php
// Tipos de datos (ejemplo file002.php)

$Cadena = "Tipo de dato de cadena";
$NúmeroEntero = 1;  // Un valor entero
$NúmeroFlotante = 1.55; // Un valor numérico con decimales
$Booleano = True; // Un valor booleano True (1) o False (0)
$Matriz[0]= "A"; // Un valor de matriz con subíndice 0
$Matriz[2] = 3; // Un valor de matriz con subíndice 2

$NúmeroOctal = 012; // octal 12 es decimal 10
$NúmeroHexadecimal = 0x1C; // hexadecimal 1c igual a decimal 28
$NúmeroNegativo = -33; // números negativos llevan el signo adelante
$NúmeroFlotanteExp = 1.55e3;

// impresión de los datos
echo "Cadena:" . $Cadena . "<BR>";
echo "N&uacute;mero entero:" . $NúmeroEntero . "<BR>";
echo "N&uacute;mero flotante:" . $NúmeroFlotante . "<BR>";
echo "Booleano:" . $Booleano . "<BR>";
echo "\$Matriz[0]:" . $Matriz[0] . "<BR>";
echo "\$Matriz[2]:" . $Matriz[2]. "<BR>";
echo "N&uacute;mero octal:" . $NúmeroOctal . "<BR>";
echo "N&uacute;mero hexadecinal:" . $NúmeroHexadecimal . "<BR>";
echo "N&uacute;mero negativo:" . $NúmeroNegativo . "<BR>";
echo "Exponencial:" . $NúmeroFlotanteExp. "<BR>";

?>