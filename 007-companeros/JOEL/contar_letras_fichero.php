<?php

$nombrefichero = "archivo01.txt";
$contador = 0;
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$carleido = fgetc($fp);
	$contador++;
}

echo "El numero de caracteres del fichero $nombrefichero es $contador <br />";
echo "<br /><br />Fin de la ejecución<br />";

?>