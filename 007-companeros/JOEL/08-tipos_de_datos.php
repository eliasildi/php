<?php
// Tipos de datos (ejemplo file002.php)

$Cadena = "Tipo de dato de cadena";
$N�meroEntero = 1;  // Un valor entero
$N�meroFlotante = 1.55; // Un valor num�rico con decimales
$Booleano = True; // Un valor booleano True (1) o False (0)
$Matriz[0]= "A"; // Un valor de matriz con sub�ndice 0
$Matriz[2] = 3; // Un valor de matriz con sub�ndice 2

$N�meroOctal = 012; // octal 12 es decimal 10
$N�meroHexadecimal = 0x1C; // hexadecimal 1c igual a decimal 28
$N�meroNegativo = -33; // n�meros negativos llevan el signo adelante
$N�meroFlotanteExp = 1.55e3;

// impresi�n de los datos
echo "Cadena:" . $Cadena . "<BR>";
echo "N&uacute;mero entero:" . $N�meroEntero . "<BR>";
echo "N&uacute;mero flotante:" . $N�meroFlotante . "<BR>";
echo "Booleano:" . $Booleano . "<BR>";
echo "\$Matriz[0]:" . $Matriz[0] . "<BR>";
echo "\$Matriz[2]:" . $Matriz[2]. "<BR>";
echo "N&uacute;mero octal:" . $N�meroOctal . "<BR>";
echo "N&uacute;mero hexadecinal:" . $N�meroHexadecimal . "<BR>";
echo "N&uacute;mero negativo:" . $N�meroNegativo . "<BR>";
echo "Exponencial:" . $N�meroFlotanteExp. "<BR>";

?>