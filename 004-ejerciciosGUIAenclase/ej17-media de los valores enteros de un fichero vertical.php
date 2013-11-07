<?php

// sacar la media de los n�meros le�dos de un fichero.
// el fichero de datos es ej17-ficherodatos.txt
//
// en ese fichero cada n�mero ocupa una l�nea. (vertical)

$i = 0;  // contador de n�meros
$suma = 0;

$nombrefichero = "ej17-ficherodatos.txt";
$fp = fopen($nombrefichero, "r") or
die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$valornumerico = (int)fgets($fp, 1024);
	$suma += $valornumerico;
	$i++;
}
fclose($fp);
$media = $suma / $i;
echo "La media de los $i n�meros es $media<br />";
?>